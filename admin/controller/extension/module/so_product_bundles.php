<?php
class ControllerExtensionModuleSoProductBundles extends Controller {
	private $moduleName;
    private $modulePath;
    private $moduleModel;
	private $moduleVersion;
    private $extensionsLink;
    private $callModel;
    private $error = array(); 
    private $data = array();
    private $eventGroup = "so_product_bundles";

    public function __construct($registry) {
        parent::__construct($registry);
        
        $this->config->load('so_product_bundles');

        $this->data['token_string'] = $this->config->get('so_product_bundles_token_string');
        $this->data['token'] = $this->session->data[$this->data['token_string']];
        $this->data['token_addon'] = $this->data['token_string'] . '=' . $this->data['token'];
        
        $this->moduleName = $this->config->get('so_product_bundles_name');
        $this->callModel = $this->config->get('so_product_bundles_model');
        $this->modulePath = $this->config->get('so_product_bundles_path');
        $this->moduleVersion = $this->config->get('so_product_bundles_version');
        $this->extensionsLink = $this->url->link($this->config->get('so_product_bundles_link'), $this->data['token_addon'] . $this->config->get('so_product_bundles_link_params'), 'SSL');

        $this->load->language($this->modulePath);
        $language_strings = $this->language->load($this->modulePath);
        foreach ($language_strings as $code => $languageVariable) {
			$this->data[$code] = $languageVariable;
		}
        
        $this->load->model($this->modulePath);
        $this->moduleModel = $this->{$this->callModel};
        
        $this->moduleModel->initDb();
        
        $this->data['moduleName'] = $this->moduleName;
        $this->data['modulePath'] = $this->modulePath;

        $this->load->model('setting/store');
        $this->load->model('setting/setting');
        $this->load->model('localisation/language');
        $this->load->model('customer/customer_group');
        
        $this->data['moduleName'] = $this->moduleName;
        $this->data['modulePath'] = $this->modulePath;
        $this->data['config_currency'] = $this->config->get('config_currency');
    }
    
	public function index() {
		$this->document->setTitle($this->language->get('heading_title'). ' ' . $this->moduleVersion);
	
		$this->load->model('catalog/product');
		$this->load->model('catalog/category');

        $this->document->addStyle('view/stylesheet/'.$this->moduleName.'/styles.css'); 

        $this->getList();
	}
    
    public function add() {
        $this->document->setTitle($this->language->get('heading_title'). ' ' . $this->moduleVersion);

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $bundle = $this->request->post['bundle'];
            $bundle = $this->moduleModel->cleanTheArray($bundle);
            
            if (!empty($this->request->get['store_id'])) {
                $bundle['store_id'] = (int) $this->request->get['store_id'];
            } else {
                $bundle['store_id'] = 0;
            }
            
            $result = $this->moduleModel->addBundle($bundle);

            if ($result) {
                $this->session->data['success'] = $this->language->get('text_success');

                $url = '';

                if (isset($this->request->get['filter_name'])) {
                    $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
                }

                if (isset($this->request->get['filter_product'])) {
                    $url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
                }

                if (isset($this->request->get['filter_discount'])) {
                    $url .= '&filter_discount=' . $this->request->get['filter_discount'];
                }

                if (isset($this->request->get['filter_status'])) {
                    $url .= '&filter_status=' . $this->request->get['filter_status'];
                }

                if(isset($this->request->post['save_stay']) and $this->request->post['save_stay']=1) {
                    $this->response->redirect($this->url->link($this->modulePath.'/edit', $this->data['token_addon'] . $url . '&store_id='.$bundle['store_id'] . '&bundle_id='.$result, true));
                }
                else {
                    $this->response->redirect($this->url->link($this->modulePath, $this->data['token_addon'] . $url, true));
                }
            }
        }

        $this->getForm();
    }

    public function edit() {
        $this->document->setTitle($this->language->get('heading_title'). ' ' . $this->moduleVersion);

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $bundle = $this->request->post['bundle'];
            $bundle = $this->moduleModel->cleanTheArray($bundle);
            
            if (!empty($this->request->get['store_id'])) {
                $bundle['store_id'] = (int) $this->request->get['store_id'];
            } else {
                $bundle['store_id'] = 0;
            }
            $bundle['id'] = $this->request->get['bundle_id'];
            $result = $this->moduleModel->editBundle($bundle);

            if ($result) {
                $this->session->data['success'] = $this->language->get('text_success');

                $url = '';

                if (isset($this->request->get['filter_name'])) {
                    $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
                }

                if (isset($this->request->get['filter_product'])) {
                    $url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
                }

                if (isset($this->request->get['filter_discount'])) {
                    $url .= '&filter_discount=' . $this->request->get['filter_discount'];
                }

                if (isset($this->request->get['filter_status'])) {
                    $url .= '&filter_status=' . $this->request->get['filter_status'];
                }

                if(isset($this->request->post['save_stay']) and $this->request->post['save_stay']=1) {
                    $this->response->redirect($this->url->link($this->modulePath.'/edit', $this->data['token_addon'] . $url . '&store_id='.$bundle['store_id'] . '&bundle_id='.$bundle['id'], true));
                }
                else {
                    $this->response->redirect($this->url->link($this->modulePath, $this->data['token_addon'] . $url, true));
                }
            }
        }

        $this->getForm();
    }

    public function delete() {
        $this->document->setTitle($this->language->get('heading_title'));

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $bundle_id) {
                $this->moduleModel->deleteBundle($bundle_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['filter_name'])) {
                $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_product'])) {
                $url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_discount'])) {
                $url .= '&filter_discount=' . $this->request->get['filter_discount'];
            }

            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
            }

            $this->response->redirect($this->url->link($this->modulePath, $this->data['token_addon'] . $url, true));
        }

        $this->getList();
    }

    public function copy() {
        $this->document->setTitle($this->language->get('heading_title'));

        if (isset($this->request->post['selected']) && $this->validateCopy()) {
            foreach ($this->request->post['selected'] as $bundle_id) {
                $bundle = $this->moduleModel->getBundle($bundle_id);
                if ($bundle) {
                    $bundle['status'] = 0;

                    $bundle['name'] = json_decode($bundle['name'], true);
                    foreach ($bundle['name'] as $language_id => $value) {
                        $bundle['name'][$language_id] = $value . ' - COPY #' . $bundle_id;
                    }

                    $bundle['description']     = json_decode($bundle['description'], true);
                    $bundle['products']        = json_decode($bundle['products'], true);
                    $bundle['products_show']   = json_decode($bundle['products_show'], true);
                    $bundle['categories_show'] = json_decode($bundle['categories_show'], true);
                    $bundle['customer_group']  = json_decode($bundle['customer_group'], true);

                    $this->moduleModel->addBundle($bundle);
                }
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['filter_name'])) {
                $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_product'])) {
                $url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_discount'])) {
                $url .= '&filter_discount=' . $this->request->get['filter_discount'];
            }

            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
            }

            $this->response->redirect($this->url->link($this->modulePath, $this->data['token_addon'] . $url, true));
        }

        $this->getList();
    }

    protected function getList() {
        $url = '';
        
        if (!empty($this->request->get['filter_name'])) {
            $filter_name = $this->request->get['filter_name'];
            $url .= "&filter_name=" . $filter_name;
        } else {
            $filter_name = '';  
        }
        
        if (!empty($this->request->get['filter_product'])) {
            $filter_product = $this->request->get['filter_product'];
            $url .= "&filter_product=" . $filter_product;
        } else {
            $filter_product = '';   
        }
        
        if (!empty($this->request->get['filter_product_id'])) {
            $filter_product_id = $this->request->get['filter_product_id'];
            $url .= "&filter_product_id=" . $filter_product_id;
        } else {
            $filter_product_id = '';    
        }
        
        if (!empty($this->request->get['filter_discount'])) {
            $filter_discount = $this->request->get['filter_discount'];
            $url .= "&filter_discount=" . $filter_discount;
        } else {
            $filter_discount = '';  
        }
        
        if (isset($this->request->get['filter_status'])) {
            $filter_status = $this->request->get['filter_status'];
            $url .= "&filter_status=" . $filter_status;
        } else {
            $filter_status = '*';   
        }

        if (!empty($this->request->get['page'])) {
            $page = (int) $this->request->get['page'];
        } else {
            $page = 1;  
        }
        
        if (!empty($this->request->get['store_id'])) {
            $store_id = (int) $this->request->get['store_id'];
        } else {
            $store_id = 0;
        }

        $this->data['store_id'] = $store_id;
        $this->data['limit'] = $this->config->get('config_limit_admin');

        if(!isset($this->request->get['store_id'])) {
           $this->request->get['store_id'] = 0; 
        }
        
        $store = $this->getCurrentStore($this->request->get['store_id']);
        
        $total_status = false;
        $total_name = $this->config->get('so_product_bundles_total_name');
        if ($this->config->get('total_' . $total_name . '_status')) {
            $total_status = true;
        }
         
        $this->data['total_url']    = $this->url->link($this->config->get('so_product_bundles_total_link'), $this->data['token_addon'] . $this->config->get('so_product_bundles_total_link_params'), 'SSL');
        $this->data['total_status'] = $total_status;
        
        $this->data['breadcrumbs'] = array();
        
        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/dashboard', $this->data['token_addon'], 'SSL'),
            'separator' => false
        );
        
        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_module'),
            'href'      => $this->extensionsLink,
            'separator' => ' :: '
        );
        
        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('heading_title'). ' ' . $this->moduleVersion,
            'href'      => $this->url->link($this->modulePath, $this->data['token_addon'], 'SSL'),
            'separator' => ' :: '
        );
        
        $this->data['store'] = $store;
        $this->data['add'] = $this->url->link($this->modulePath.'/add', $this->data['token_addon'] . '&store_id='.$this->request->get['store_id'] . $url, 'SSL');
        $this->data['copy'] = $this->url->link($this->modulePath.'/copy', $this->data['token_addon'] . '&store_id='.$this->request->get['store_id'] . $url, 'SSL');
        $this->data['delete'] = $this->url->link($this->modulePath.'/delete', $this->data['token_addon'] . '&store_id='.$this->request->get['store_id']  . $url, true);
        $this->data['stores'] = array_merge(array(0 => array('store_id' => '0', 'name' => $this->config->get('config_name') . ' ' . $this->data['text_default'].'', 'url' => HTTP_SERVER, 'ssl' => HTTPS_SERVER)), $this->model_setting_store->getStores());
        
        $this->data['user_token'] = $this->session->data['user_token'];
        
        $this->data['sources']      = array();

        $filter_data = array(
            'store_id'      => $store_id,
            'filter_name'   => $filter_name,
            'filter_product'=> $filter_product,
            'filter_product_id'=> $filter_product_id,
            'filter_discount'=> $filter_discount,
            'filter_status' => $filter_status,
            'page'          => $page,
            'limit'         => $this->data['limit']
        );
        
        $this->data['total']        = $this->moduleModel->getTotalBundles($filter_data);
        $results                    = $this->moduleModel->getBundles($filter_data);
        
        foreach ($results as $index => $key) {
            $this->data['sources'][$index]['id']        = $key['id'];
            $this->data['sources'][$index]['name']      = strlen(current(json_decode($key['name'], true))) > 50 ? mb_substr(current(json_decode($key['name'], true)), 0, 50).'...' : current(json_decode($key['name'], true));
            $this->data['sources'][$index]['products']  = '';
            $this->data['sources'][$index]['discount']  = $key['discount_value'];
            $this->data['sources'][$index]['date_added']  = $key['date_added'];
            $this->data['sources'][$index]['date_modified'] = $key['date_modified'];
            $this->data['sources'][$index]['discount_type'] = $key['discount_type'];
            
            $products = json_decode($key['products'], true);
            
            foreach ($products as $product) {
                $product_info = $this->model_catalog_product->getProduct($product);
                
                if (!empty($this->data['sources'][$index]['products'])) $this->data['sources'][$index]['products'] .= ', ';
                
                if ($product_info) {
                    $this->data['sources'][$index]['products'] .= $product_info['name'];
                } else {
                    $this->data['sources'][$index]['products'] .= '(missing)';
                }
            }
            
            $this->data['sources'][$index]['enabled']   = $key['status'];
            $this->data['sources'][$index]['status']    = ($key['status']) ? $this->data['text_enabled'] : $this->data['text_disabled'];
            $this->data['sources'][$index]['edit']    = $this->url->link($this->modulePath.'/edit', 'store_id=' . $this->request->get['store_id'] .'&bundle_id=' . $key['id'] . '&' . $this->data['token_addon'] . $url, 'SSL');
        }
        
        $pagination                 = new Pagination();
        $pagination->page           = $page;
        $pagination->total          = $this->data['total'];
        $pagination->limit          = $this->data['limit']; 
        $pagination->url            = $this->url->link($this->modulePath, 'store_id=' . $this->request->get['store_id'] . '&' . $this->data['token_addon'] . '&page={page}' . $url, 'SSL');
        $this->data['pagination']   = $pagination->render();

        $this->data['results']      = sprintf($this->language->get('text_pagination'), ($this->data['total']) ? (($page - 1) * $this->data['limit']) + 1 : 0, ((($page - 1) * $this->data['limit']) > ($this->data['total'] - $this->data['limit'])) ? $this->data['total'] : ((($page - 1) * $this->data['limit']) + $this->data['limit']), $this->data['total'], ceil($this->data['total'] / $this->data['limit']));

        $this->data['page']         = $page;
        $this->data['filter_name']  = $filter_name;
        $this->data['filter_product'] = $filter_product;
        $this->data['filter_product_id'] = $filter_product_id;
        $this->data['filter_discount'] = $filter_discount;
        $this->data['filter_status'] = $filter_status;
        
        $this->data['moduleSettings'] = $this->model_setting_setting->getSetting($this->moduleName, $store['store_id']);
        $this->data['moduleData'] = isset($this->data['moduleSettings'][$this->moduleName]) ? $this->data['moduleSettings'][$this->moduleName] : array ();
        
        if (isset($this->request->get['stat_start'])) {
            $this->data['stat_start'] = $this->request->get['stat_start'];
        }
        if (isset($this->request->get['stat_end'])) {
            $this->data['stat_end'] = $this->request->get['stat_end'];
        }
        if (isset($this->request->get['stat_group'])) {
            $this->data['stat_group'] = $this->request->get['stat_group'];
        }
        
        $this->data['header'] = $this->load->controller('common/header');
        $this->data['column_left'] = $this->load->controller('common/column_left');
        $this->data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->modulePath.'/'.$this->moduleName.'', $this->data));
    }

    protected function getForm() {
        $this->data['text_form'] = !isset($this->request->get['bundle_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

        if (isset($this->error['warning'])) {
            $this->data['error_warning'] = $this->error['warning'];
        } else {
            $this->data['error_warning'] = '';
        }

        if (isset($this->error['name'])) {
            $this->data['error_name'] = $this->error['name'];
        } else {
            $this->data['error_name'] = array();
        }

        if (isset($this->error['products'])) {
            $this->data['error_products'] = $this->error['products'];
        } else {
            $this->data['error_products'] = '';
        }

        $this->data['breadcrumbs'] = array();
        
        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/dashboard', $this->data['token_addon'], 'SSL'),
            'separator' => false
        );
        
        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_module'),
            'href'      => $this->extensionsLink,
            'separator' => ' :: '
        );
        
        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('heading_title'). ' ' . $this->moduleVersion,
            'href'      => $this->url->link($this->modulePath, $this->data['token_addon'], 'SSL'),
            'separator' => ' :: '
        );

        if (!empty($this->request->get['store_id'])) {
            $store_id = (int) $this->request->get['store_id'];
        } else {
            $store_id = 0;
        }

        if (!isset($this->request->get['bundle_id'])) {
            $this->data['action'] = $this->url->link($this->modulePath.'/add', $this->data['token_addon'] . '&store_id='.$store_id, true);
        } else {
            $this->data['action'] = $this->url->link($this->modulePath.'/edit', $this->data['token_addon'] . '&bundle_id=' . $this->request->get['bundle_id'].'&store_id='.$store_id, true);
        }

        $this->data['cancel'] = $this->url->link($this->modulePath, $this->data['token_addon'].'&store_id='.$store_id, true);

        $this->data['user_token'] = $this->session->data['user_token'];

        // Language data
        $this->load->model('localisation/language');
        $this->data['languages']                = $this->model_localisation_language->getLanguages();
        foreach ($this->data['languages'] as $key => $value) {
            $this->data['languages'][$key]['flag_url'] = 'language/'.$this->data['languages'][$key]['code'].'/'.$this->data['languages'][$key]['code'].'.png"';
        }
        $this->data['languages'] = array_values($this->data['languages']);
        
        $this->data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();
        $this->data['modulePath'] = $this->modulePath;
        
        $bundle_id = (!empty($this->request->get['bundle_id'])) ? $this->request->get['bundle_id'] : 0;
        $bundle = $this->moduleModel->getBundle($bundle_id);
        $this->data['default_language_id'] = $this->config->get('config_language_id');
        $this->data['bundle'] = $this->moduleModel->cleanTheArray($bundle);
        $this->data['bundle']['price'] = '0';
        $this->data['bundle']['bundled_price'] = '0';

        if ($bundle_id != 0) {
            $this->load->model('catalog/product');
            $this->load->model('catalog/category');
            $this->load->model('tool/image');
            
            $this->data['bundle']['name'] = json_decode($this->data['bundle']['name'], true);
            $this->data['bundle']['description'] = json_decode($this->data['bundle']['description'], true);
            $this->data['bundle']['date_available'] = date('Y-m-d', strtotime($this->data['bundle']['date_available']));

            $this->data['bundle']['products']       = json_decode($this->data['bundle']['products'], true);
            foreach ($this->data['bundle']['products'] as $index => $product) {
                $product_info = $this->model_catalog_product->getProduct($product);
                if ($product_info) {
                    if (is_file(DIR_IMAGE . $product_info['image'])) {
                        $image = $this->model_tool_image->resize($product_info['image'], 80, 80);
                    } else {
                        $image = $this->model_tool_image->resize('no_image.png', 80, 80);
                    }
                    
                    $special = false;
                    $product_specials = $this->model_catalog_product->getProductSpecials($product_info['product_id']);
                    foreach ($product_specials  as $product_special) {
                        if (($product_special['date_start'] == '0000-00-00' || $product_special['date_start'] < date('Y-m-d')) && ($product_special['date_end'] == '0000-00-00' || $product_special['date_end'] > date('Y-m-d'))) {
                            $special = $product_special['price'];
                            break;
                        }                    
                    }
                    
                    $product_price = $special ? $special : $product_info['price'];
                    $product_options = $this->model_catalog_product->getProductOptions($product_info['product_id']);
                    
                    $this->data['bundle']['products'][$index] = array();
                    $this->data['bundle']['products'][$index]['product_id'] = $product_info['product_id'];
                    $this->data['bundle']['products'][$index]['name'] = $product_info['name'];
                    $this->data['bundle']['products'][$index]['image'] = $image;
                    $this->data['bundle']['products'][$index]['options'] = count($product_options);
                    $this->data['bundle']['products'][$index]['price'] = number_format($product_price, 2);
                    $this->data['bundle']['price'] += $product_price; 
                }
            }
            
            $this->data['bundle']['products_show']  = json_decode($this->data['bundle']['products_show'], true);
            foreach ($this->data['bundle']['products_show'] as $index => $product) {
                $product_info = $this->model_catalog_product->getProduct($product);
                
                $this->data['bundle']['products_show'][$index] = array();
                $this->data['bundle']['products_show'][$index]['product_id'] = $product_info['product_id'];
                $this->data['bundle']['products_show'][$index]['name'] = $product_info['name'];
            }
            
            $this->data['bundle']['categories_show']= json_decode($this->data['bundle']['categories_show'], true);
            foreach ($this->data['bundle']['categories_show'] as $index => $category) {
                $category_info = $this->model_catalog_category->getCategory($category);
                
                $this->data['bundle']['categories_show'][$index] = array();
                $this->data['bundle']['categories_show'][$index]['category_id'] = $category_info['category_id'];
                $this->data['bundle']['categories_show'][$index]['name'] = $category_info['name'];
            }
            
            $this->data['bundle']['customer_group'] = !empty($this->data['bundle']['customer_group']) ? json_decode($this->data['bundle']['customer_group'], true) : array();

            // Discounted Value Calculation
            if ($this->data['bundle']['discount_type'] == '1') {
                $this->data['bundle']['bundled_price'] = $this->data['bundle']['price'] - $this->data['bundle']['discount_value'];
            } else if ($this->data['bundle']['discount_type'] == '2') {
                $this->data['bundle']['bundled_price'] = $this->data['bundle']['price'] - $this->data['bundle']['discount_value'];
            }
            
            $this->data['bundle']['price'] = number_format($this->data['bundle']['price'], 2);
            $this->data['bundle']['bundled_price'] = number_format($this->data['bundle']['bundled_price'], 2);
        } else {
            $this->data['bundle']['id'] = 0;
        }

        $this->data['header'] = $this->load->controller('common/header');
        $this->data['column_left'] = $this->load->controller('common/column_left');
        $this->data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->modulePath.'/bundle_form', $this->data));
    }
    
    public function autocomplete_products() {
		$json = array();

		if (isset($this->request->get['filter_name']) || isset($this->request->get['filter_model'])) {
			$this->load->model('catalog/product');
			$this->load->model('catalog/option');
            $this->load->model('tool/image');
            
			if (isset($this->request->get['filter_name'])) {
				$filter_name = $this->request->get['filter_name'];
			} else {
				$filter_name = '';
			}

			if (isset($this->request->get['filter_model'])) {
				$filter_model = $this->request->get['filter_model'];
			} else {
				$filter_model = '';
			}

			if (isset($this->request->get['limit'])) {
				$limit = $this->request->get['limit'];
			} else {
				$limit = 5;
			}

			$filter_data = array(
				'filter_name'  => $filter_name,
				'filter_model' => $filter_model,
				'start'        => 0,
				'limit'        => $limit
			);

			$results = $this->model_catalog_product->getProducts($filter_data);

			foreach ($results as $result) {
				$option_data = array();

				$product_options = $this->model_catalog_product->getProductOptions($result['product_id']);

				foreach ($product_options as $product_option) {
					$option_info = $this->model_catalog_option->getOption($product_option['option_id']);

					if ($option_info) {
						$product_option_value_data = array();

						foreach ($product_option['product_option_value'] as $product_option_value) {
							$option_value_info = $this->model_catalog_option->getOptionValue($product_option_value['option_value_id']);

							if ($option_value_info) {
								$product_option_value_data[] = array(
									'product_option_value_id' => $product_option_value['product_option_value_id'],
									'option_value_id'         => $product_option_value['option_value_id'],
									'name'                    => $option_value_info['name'],
									'price'                   => (float)$product_option_value['price'] ? $this->currency->format($product_option_value['price'], $this->config->get('config_currency')) : false,
									'price_prefix'            => $product_option_value['price_prefix']
								);
							}
						}

						$option_data[] = array(
							'product_option_id'    => $product_option['product_option_id'],
							'product_option_value' => $product_option_value_data,
							'option_id'            => $product_option['option_id'],
							'name'                 => $option_info['name'],
							'type'                 => $option_info['type'],
							'value'                => $product_option['value'],
							'required'             => $product_option['required']
						);
					}
				}


				$special = false;
				$product_specials = $this->model_catalog_product->getProductSpecials($result['product_id']);
				foreach ($product_specials  as $product_special) {
					if (($product_special['date_start'] == '0000-00-00' || $product_special['date_start'] < date('Y-m-d')) && ($product_special['date_end'] == '0000-00-00' || $product_special['date_end'] > date('Y-m-d'))) {
						$special = $product_special['price'];
						break;
					}					
				}
                
                if (is_file(DIR_IMAGE . $result['image'])) {
				    $image = $this->model_tool_image->resize($result['image'], 80, 80);
			    } else {
				    $image = $this->model_tool_image->resize('no_image.png', 80, 80);
			    }
			
				$json[] = array(
				    'special'       => (float)$special, 
					'product_id'    => $result['product_id'],
                    'image'         => $image,
					'name'          => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
					'model'         => $result['model'],
					'option'        => $option_data,
					'price'         => $result['price']
				);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
    
    public function autocomplete_categories() {
		$json = array();

		if (isset($this->request->get['filter_name'])) {
			$this->load->model('catalog/category');

			$filter_data = array(
				'filter_name' => $this->request->get['filter_name'],
				'sort'        => 'name',
				'order'       => 'ASC',
				'start'       => 0,
				'limit'       => 5
			);

			$results = $this->model_catalog_category->getCategories($filter_data);

			foreach ($results as $result) {
				$json[] = array(
					'category_id' => $result['category_id'],
					'name'        => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))
				);
			}
		}

		$sort_order = array();

		foreach ($json as $key => $value) {
			$sort_order[$key] = $value['name'];
		}

		array_multisort($sort_order, SORT_ASC, $json);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

    public function settings() {
        $this->document->setTitle($this->language->get('text_config'));

        $this->document->addStyle('view/stylesheet/'.$this->moduleName.'/styles.css'); 

        if(!isset($this->request->get['store_id'])) {
           $this->request->get['store_id'] = 0; 
        }
        
        $store = $this->getCurrentStore($this->request->get['store_id']);

        if (($this->request->server['REQUEST_METHOD'] == 'POST')  && $this->validateFormSettings()) {
            $this->setupEvent();

            $module_status = array(
                'group' => $this->config->get('so_product_bundles_status_group'),
                'value' => $this->config->get('so_product_bundles_status_value')
            );
            
            $this->model_setting_setting->editSetting($module_status['group'], array($module_status['value'] => '1'));
            
            $this->model_setting_setting->editSetting($this->moduleName, $this->request->post, $this->request->post['store_id']);
            
            $this->session->data['success'] = $this->language->get('text_success');
            
            $this->response->redirect($this->url->link($this->modulePath.'/settings', $this->data['token_addon'] . '&store_id='.$store['store_id'], 'SSL'));
        }

        if (isset($this->session->data['success'])) {
            $this->data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $this->data['success'] = '';
        }
        
        if (isset($this->error['warning'])) {
            $this->data['error_warning'] = $this->error['warning'];
        } else {
            $this->data['error_warning'] = '';
        }
        
        if ($this->config->get($this->moduleName.'_status')) {
            $this->data[$this->moduleName.'_status'] = $this->config->get($this->moduleName.'_status');
        } else {
            $this->data[$this->moduleName.'_status'] = '0';
        }
        
        $this->data['breadcrumbs'] = array();
        
        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/dashboard', $this->data['token_addon'], 'SSL'),
            'separator' => false
        );
        
        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_module'),
            'href'      => $this->extensionsLink,
            'separator' => ' :: '
        );
        
        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('heading_title'). ' ' . $this->moduleVersion,
            'href'      => $this->url->link($this->modulePath, $this->data['token_addon'], 'SSL'),
            'separator' => ' :: '
        );

        $this->data['text_config'] = $this->language->get('text_config');
        $this->data['user_token'] = $this->session->data['user_token'];

        $this->data['store'] = $store;
        $languages = $this->model_localisation_language->getLanguages();
        $this->data['languages'] = $languages;
        $this->data['stores'] = array_merge(array(0 => array('store_id' => '0', 'name' => $this->config->get('config_name') . ' ' . $this->data['text_default'].'', 'url' => HTTP_SERVER, 'ssl' => HTTPS_SERVER)), $this->model_setting_store->getStores());
        foreach ($this->data['languages'] as $key => $value) {
            $this->data['languages'][$key]['flag_url'] = 'language/'.$this->data['languages'][$key]['code'].'/'.$this->data['languages'][$key]['code'].'.png"';
        }
        $firstLanguage = array_shift($languages);
        $this->data['firstLanguageCode'] = $firstLanguage['code'];
        $this->data['firstLanguage'] = $firstLanguage;

        $this->data['moduleSettings'] = $this->model_setting_setting->getSetting($this->moduleName, $store['store_id']);
        $this->data['moduleData'] = isset($this->data['moduleSettings'][$this->moduleName]) ? $this->data['moduleSettings'][$this->moduleName] : array ();

        $this->data['header'] = $this->load->controller('common/header');
        $this->data['column_left'] = $this->load->controller('common/column_left');
        $this->data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view($this->modulePath.'/bundle_config', $this->data));
    }

    public function statistic() {
        $this->document->setTitle($this->language->get('text_statistic'));

        $this->data['stat_start']  = '';
        $this->data['stat_end']    = '';
        $this->data['filter_group'] = 'day';

        if (isset($this->request->get['stat_start'])) {
            $this->data['stat_start'] = $this->request->get['stat_start'];
        }
        if (isset($this->request->get['stat_end'])) {
            $this->data['stat_end'] = $this->request->get['stat_end'];
        }
        if (isset($this->request->get['filter_group'])) {
            $this->data['filter_group'] = $this->request->get['filter_group'];
        }

        $this->data['items'] = array();

        $filter_data = array(
            'stat_start' => $this->data['stat_start'],
            'stat_end' => $this->data['stat_end'],
            'filter_group' => $this->data['filter_group']
        );
        $results = $this->moduleModel->getStatistic($filter_data);

        foreach ($results as $result) {
            if ($this->data['filter_group'] == 'year') {
                $date = date('Y', strtotime($result['date_start']));
            } else if ($this->data['filter_group'] == 'month') {
                $date = date('F Y', strtotime($result['date_start']));
            } else {
                $date_start = date($this->language->get('date_format_short'), strtotime($result['date_start']));
                $date_end   = date($this->language->get('date_format_short'), strtotime($result['date_end']));
                $date       = $date_start == $date_end ? $date_start : $date_start . ' - ' . $date_end;
            }
            
            $this->data['items'][$date] = array(
                'view'      => $result['view'],
                'addcart'   => $result['addcart'],
                'order'     => $result['order'],
            );
        }

        $this->data['user_token'] = $this->session->data['user_token'];

        $this->data['header']                       = $this->load->controller('common/header');
        $this->data['column_left']                  = $this->load->controller('common/column_left');
        $this->data['footer']                       = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->modulePath.'/bundle_statstic', $this->data));
    }

    protected function validateForm() {
		if (!$this->user->hasPermission('modify', $this->modulePath)) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

        $languages = $this->model_localisation_language->getLanguages();
        foreach ($languages as $lang) {
            if ((utf8_strlen($this->request->post['bundle']['name'][$lang['language_id']]) < 1) || (utf8_strlen($this->request->post['bundle']['name'][$lang['language_id']]) > 255)) {
                $this->error['name'][$lang['language_id']] = $this->language->get('error_name');
            }
        }

        if (!isset($this->request->post['bundle']['products']) || !is_array($this->request->post['bundle']['products']) || (is_array($this->request->post['bundle']['products'] && count($this->request->post['bundle']['products']) < 2))) {
            $this->error['products'] = $this->language->get('error_product');
        }

		return !$this->error;
	}

    protected function validateFormSettings() {
        if (!$this->user->hasPermission('modify', $this->modulePath)) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    protected function validateDelete() {
        if (!$this->user->hasPermission('modify', $this->modulePath)) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    protected function validateCopy() {
        if (!$this->user->hasPermission('modify', $this->modulePath)) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
	
	public function install() {
        $this->moduleModel->install();
        $this->setupEvent();
    }
	
	public function uninstall() {
    	$this->load->model('setting/setting');
		$this->load->model('setting/store');

		$this->model_setting_setting->deleteSetting($this->moduleName, 0);
		$stores = $this->model_setting_store->getStores();
        
		foreach ($stores as $store) {
			$this->model_setting_setting->deleteSetting($this->moduleName, $store['store_id']);
		}
        
        $this->moduleModel->uninstall();
        $this->removeEvent();
    }   

    private function setupEvent() {
        $this->load->model('setting/event');

        $this->removeEvent();

        $this->model_setting_event->addEvent($this->eventGroup, "admin/view/common/column_left/before", $this->modulePath . "/injectAdminMenuItem");
        $this->model_setting_event->addEvent($this->eventGroup, "catalog/view/common/success/before", $this->modulePath . "/orderActivity");
    }

    private function removeEvent() {
        $this->load->model('setting/event');
        $this->model_setting_event->deleteEventByCode($this->eventGroup);
    }
    
    public function injectAdminMenuItem($eventRoute, &$data) {
        if ($this->user->hasPermission('access', $this->modulePath)) {
            $this->load->language($this->modulePath);

            foreach ($data["menus"] as &$menu) {
                if ($menu["id"] == "menu-catalog") {
                    $product_bundles = array();

                    $product_bundles[] = array(
                        'name' => $this->language->get('admin_menu_entry_configuration'),
                        'href' => $this->url->link($this->modulePath.'/settings', '&user_token=' . $this->session->data['user_token'], true),
                        'children' => array()
                    );

                    $product_bundles[] = array(
                        'name' => $this->language->get('admin_menu_entry_listing'),
                        'href' => $this->url->link($this->modulePath, 'user_token=' . $this->session->data['user_token'], true),
                        'children' => array()
                    );

                    $product_bundles[] = array(
                        'name' => $this->language->get('text_statistic'),
                        'href' => $this->url->link($this->modulePath.'/statistic', '&user_token=' . $this->session->data['user_token'], true),
                        'children' => array()
                    );

                    $menu["children"][] = array(
                        'name'	   => $this->language->get('admin_menu_entry'),
                        'href'     => '',
                        'children' => $product_bundles	
                    );
                }
            }
        }
    }

	private function getCatalogURL() {
        if (isset($_SERVER['HTTPS']) && (($_SERVER['HTTPS'] == 'on') || ($_SERVER['HTTPS'] == '1'))) {
            $storeURL = HTTPS_CATALOG;
        } else {
            $storeURL = HTTP_CATALOG;
        } 
        return $storeURL;
    }

    private function getCurrentStore($store_id) {    
        if($store_id && $store_id != 0) {
            $this->load->model('setting/store');
            $store = $this->model_setting_store->getStore($store_id);
        } else {
            $store['store_id'] = 0;
            $store['name'] = $this->config->get('config_name');
            $store['url'] = $this->getCatalogURL(); 
        }
        return $store;
    }
}
