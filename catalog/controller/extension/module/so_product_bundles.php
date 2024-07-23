<?php
class ControllerExtensionModuleSoProductBundles extends Controller {
	private $moduleName;
    private $callModel;
    private $modulePath;
    private $moduleModel;
    private $currency_code;
    private $data = array();

    public function __construct($registry) {
        parent::__construct($registry);

        $this->config->load('so_product_bundles');

        $this->moduleName       = $this->config->get('so_product_bundles_name');
        $this->callModel        = $this->config->get('so_product_bundles_model');
        $this->modulePath       = $this->config->get('so_product_bundles_path');
        
        $this->load->model($this->modulePath);

        $this->moduleModel      = $this->{$this->callModel};

        $this->load->model('setting/store');
        $this->load->model('catalog/product');
        $this->load->model('setting/setting');
        $this->load->model('tool/image');

        $this->data['moduleName'] 		= $this->moduleName;
        $this->data['modulePath']       = $this->modulePath;
        $this->data['cart_url']         = $this->url->link('checkout/cart');
        $this->data['language_id']      = $this->config->get('config_language_id');
        $this->data['CloseButton']      = true;
        
        if (!empty($this->session->data['currency'])) {
            $this->currency_code = $this->session->data['currency'];
        } else {
            $this->currency_code = $this->config->get('config_currency');
        }

    }

	public function index($setting) {
        $this->load->language($this->modulePath);

        $language_strings = $this->language->load($this->modulePath);
        foreach ($language_strings as $code => $languageVariable) {
            $this->data[$code] = $languageVariable;
        }

		//$this->document->addScript('catalog/view/javascript/'.$this->moduleName.'/fancybox/jquery.fancybox.pack.js');
		//$this->document->addStyle('catalog/view/javascript/'.$this->moduleName.'/fancybox/jquery.fancybox.css');

		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
		$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

		$this->data['moduleData'] = $this->config->get($this->moduleName);
        $picture_width = isset($this->data['moduleData']['WidgetWidth']) ? $this->data['moduleData']['WidgetWidth'] : '100';
		$picture_height = isset($this->data['moduleData']['WidgetHeight']) ? $this->data['moduleData']['WidgetHeight'] : '100';

        $bundles = array();

        $filter = array();

        if (isset($this->request->get['product_id'])) {
            $p_id = $this->request->get['product_id'];

            $filter['product_id'] = $p_id;
        }

        if ((isset($this->request->get['path'])) && (!isset($this->request->get['product_id']))) {
            $category = (explode("_", $this->request->get['path']));
			if (isset($category[1])) {
				$cat_id = end($category);
            } else {
				$cat_id = $this->request->get['path'];
            }

            $filter['category_id'] = $cat_id;
        }

        if (isset($this->data['moduleData']['WidgetLimit'])) {
            $filter['limit'] = $this->data['moduleData']['WidgetLimit'];
        }

        if (isset($this->data['moduleData']['DisplayType'])) {
            $filter['order'] = $this->data['moduleData']['DisplayType'];

            if (!isset($filter['product_id']) && !isset($filter['category_id']) && $this->data['moduleData']['ShowRandomBundles'] == 'yes') {
                $filter['order'] = 'random';
            }
        }

        $filter['page'] = 1;

        $bundles = $this->moduleModel->getBundles($filter);
        
        $this->data['bundles'] = array();

        if ($bundles) {
            foreach ($bundles as $index => $bundle) {
                $total_price = 0;
				$total_price_no_taxes = 0;

                $this->data['bundles'][$bundle['id']] = array();
                $this->data['bundles'][$bundle['id']]['id'] = $bundle['id'];
                $this->data['bundles'][$bundle['id']]['products'] = array();
                $this->data['bundles'][$bundle['id']]['product_options'] = 'false';

                foreach ($bundle['products'] as $product_id) {
                    $product_info = $this->model_catalog_product->getProduct($product_id);

                    if (!isset($this->data['bundles'][$bundle['id']]['products'][$product_id])) {

                        if ($product_info['image']) {
                            $image = $this->model_tool_image->resize($product_info['image'], $picture_width, $picture_height);
                        } else {
                            $image = false;
                        }

                        if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                            $price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->currency_code);
                        } else {
                            $price = false;
                        }

                        if ((float)$product_info['special']) {
                            $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->currency_code);

                            $total_price += $this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                            $total_price_no_taxes += $product_info['special'];
                        } else {
                            $special = false;

                            $total_price += $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                            $total_price_no_taxes += $product_info['price'];
                        }

                        $product_options = $this->model_catalog_product->getProductOptions($product_id);
                        if (!empty($product_options)) {
                            $this->data['bundles'][$bundle['id']]['product_options'] = 'true';
                        }

                        $this->data['bundles'][$bundle['id']]['products'][$product_id] = array(
                            'product_id' => $product_id,
                            'quantity'	 => 1,
                            'thumb'   	 => $image,
                            'name'    	 => $product_info['name'],
                            'price'   	 => $price,
                            'special' 	 => $special,
                            'href'    	 => $this->url->link('product/product', 'product_id=' . $product_id)
                        );

                    } else {
                        if ((float)$product_info['special']) {
                            $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->currency_code);

                            $total_price += $this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                            $total_price_no_taxes += $product_info['special'];
                        } else {
                            $special = false;

                            $total_price += $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                            $total_price_no_taxes += $product_info['price'];
                        }

                        $this->data['bundles'][$bundle['id']]['products'][$product_id]['quantity'] += 1;
                    }
                }

                if (isset($this->data['moduleData']['DiscountTaxation']) && $this->data['moduleData']['DiscountTaxation'] == 'no') {
                    if ($bundle['discount_type'] == '1') {
                        $discount_value = $bundle['discount_value'];
                    } else if ($bundle['discount_type'] == '2') {
                        $percentage = $bundle['discount_value']/100;
                        $discount_value = $percentage*$total_price;
                    }
                } else {
                    if ($bundle['discount_type'] == '1') {
                        $discount_value = $bundle['discount_value'];
                    } else if ($bundle['discount_type'] == '2') {
                        $percentage = $bundle['discount_value']/100;
                        $discount_value = $percentage*$total_price_no_taxes;
                    }
                }

                if (isset($this->data['moduleData']['DiscountTaxation']) && $this->data['moduleData']['DiscountTaxation']=='yes') {
					foreach ($bundle['products'] as $result) {
						$product_info = $this->model_catalog_product->getProduct($result);
						if ((float)$product_info['special']) {
							$ratio = $total_price_no_taxes / $product_info['special'];
						} else {
							$ratio = $total_price_no_taxes / $product_info['price'];
						}

						$tax_rates = $this->tax->getRates((float)$discount_value / $ratio, $product_info['tax_class_id']);
						foreach ($tax_rates as $tax_rate) {
							if ($tax_rate['type'] == 'P') {
								$total_price -= $tax_rate['amount'];
							}
						}
					}
				}

                $final_price = $total_price - $discount_value;
                $this->data['bundles'][$bundle['id']]['discount_value'] = $discount_value;
				$this->data['bundles'][$bundle['id']]['total_price'] = $this->currency->format($total_price, $this->currency_code);
				$this->data['bundles'][$bundle['id']]['discount_value'] = $this->currency->format($discount_value, $this->currency_code);
				$this->data['bundles'][$bundle['id']]['final_price'] = $this->currency->format($final_price, $this->currency_code);

                if  (!empty($bundle['name'][$this->config->get('config_language_id')])) {
					$this->data['bundles'][$bundle['id']]['name'] = $bundle['name'][$this->config->get('config_language_id')];
				} else {
					$this->data['bundles'][$bundle['id']]['name'] = $this->language->get('view_bundle');
				}

                if (!empty($bundle['description'][$this->config->get('config_language_id')])) {
					$this->data['bundles'][$bundle['id']]['description'] = $bundle['description'][$this->config->get('config_language_id')];
				} else {
					$this->data['bundles'][$bundle['id']]['description'] = $this->language->get('view_bundle');
				}

                $this->data['bundles'][$bundle['id']]['description'] = html_entity_decode($this->data['bundles'][$bundle['id']]['description'], ENT_QUOTES, 'UTF-8');

                $this->data['bundles'][$bundle['id']]['url'] = $this->url->link($this->modulePath . '/view', 'bundle_id=' . $bundle['id'], 'SSL');
            }

        }

        $this->data['listing_url'] = $this->url->link($this->modulePath . '/listing', '', 'SSL');

        if (file_exists('catalog/view/theme/' . $this->config->get('config_template') .'/stylesheet/' .$this->moduleName. '/styles.css')) {
            $this->document->addStyle('catalog/view/theme/'.$this->config->get('config_template').'/stylesheet/' .$this->moduleName. '/styles.css?v=' . $this->moduleVersion);
        } else {
            $this->document->addStyle('catalog/view/theme/default/stylesheet/'.$this->moduleName.'/styles.css?v=' . $this->moduleVersion);
        }

        return $this->load->view($this->modulePath.'/index', $this->data);
	}

    public function add() {
		$json = array();

		if (isset($this->request->get['bundle_id'])) {
			$bundle_id   = $this->request->get['bundle_id'];
            $bundle      = $this->moduleModel->getBundle($bundle_id);
            $bundle      = is_array($bundle) ? current($bundle) : array();

            if ($bundle) {
                foreach ($bundle['products'] as $product_id) {
                    $this->cart->add($product_id, 1);
                }

                $json['success'] = true;
			} else {
				$json['error'] = true;
			}
		} else {
			$json['error'] = true;
		}

		echo json_encode($json);
        exit;
	}

	public function addwithoptions() {
        $this->load->language($this->modulePath);
        
        $json = array();

        if (isset($this->request->post) && $this->request->post['products']) {
            $items    = explode("_", $this->request->post['products']);
            $products = array_count_values($items);

            if (isset($this->request->post['option'])) {
                $option = $this->request->post['option'];
            } else {
                $option = array();
            }

            foreach ($products as $product_id => $quantity) {
                $product_options = $this->model_catalog_product->getProductOptions($product_id);
                foreach ($product_options as $product_option) {
                    if ($product_option['required'] && empty($option[$product_id][$product_option['product_option_id']])) {
                        if (empty($json['error']['option'][$product_option['product_option_id']])) {
                            $json['error']['option'][$product_option['product_option_id']] = array();
                        }

                        $json['error']['option'][$product_option['product_option_id']][] = array(
                            'message' => sprintf($this->language->get('error_required'), $product_option['name']),
                            'key' 	 => $product_id
                        );
                    }
                }
            }

            if (!$json) {
                foreach ($products as $product_id => $quantity) {
                    $p_option = !empty($option[$product_id]) ? $option[$product_id] : array();
                    $this->cart->add($product_id, $quantity, $p_option, "");
                }
                $json['success'] = true;
            }

		} else {
			//echo "ERROR 2!";
		}

		echo json_encode($json);
        exit;
	}

    public function product_with_options() {
        $this->load->language($this->modulePath);

        $language_strings = $this->language->load($this->modulePath);
        foreach ($language_strings as $code => $languageVariable) {
            $this->data[$code] = $languageVariable;
        }

		$this->data['moduleData'] = $this->config->get('so_product_bundles');
		$this->data['cart_url'] = $this->url->link('checkout/cart');
        $this->data['products'] = array();

		if (isset($this->request->get['bundle_id'])) {
			$bundle_id = $this->request->get['bundle_id'];
			$this->data['bundle_products'] = "";
            $picture_width = isset($this->data['moduleData']['WidgetWidth']) ? $this->data['moduleData']['WidgetWidth'] : '128';
			$picture_height = isset($this->data['moduleData']['WidgetHeight']) ? $this->data['moduleData']['WidgetHeight'] : '128';

            $bundle = $this->moduleModel->getBundle($bundle_id);
            $bundle = is_array($bundle) ? current($bundle) : array();

            $this->data['bundle_name'] = $this->language->get('view_bundle');
            if (!empty($bundle['name'][$this->config->get('config_language_id')])) {
                $this->data['bundle_name'] = $bundle['name'][$this->config->get('config_language_id')];
            }

            if ($bundle) {
                foreach ($bundle['products'] as $index => $result) {
                    if ($index != 0) { $this->data['bundle_products'] .= "_"; }
				    $this->data['bundle_products'] .= $result;

                    if (!isset($this->data['products'][$result])) {
                        $product_info = $this->model_catalog_product->getProduct($result);

                        if ($product_info['image']) {
                            $image = $this->model_tool_image->resize($product_info['image'], $picture_width, $picture_height);
                        } else {
                            $image = false;
                        }

                        if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                            $price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->currency_code);
                        } else {
                            $price = false;
                        }

                        if ((float)$product_info['special']) {
                            $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->currency_code);
                        } else {
                            $special = false;
                        }

                        if ($this->config->get('config_review_status')) {
                            $rating = (int)$product_info['rating'];
                        } else {
                            $rating = false;
                        }

                        $product_options = $this->model_catalog_product->getProductOptions($product_info['product_id']);
                        $this->data['options'] = array();

                        foreach ($product_options as $option) {
                            if ($option['type'] == 'select' || $option['type'] == 'radio' || $option['type'] == 'checkbox' || $option['type'] == 'image') {
                                $option_value_data = array();
                                foreach ($option['product_option_value'] as $option_value) {
                                    if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
                                        if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
                                            $option_price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->currency_code);
                                        } else {
                                            $option_price = 0;
                                        }

                                        $option_value_data[] = array(
                                            'product_option_value_id' => $option_value['product_option_value_id'],
                                            'option_value_id'         => $option_value['option_value_id'],
                                            'name'                    => $option_value['name'],
                                            'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
                                            'price'                   => $option_price,
                                            'price_prefix'            => $option_value['price_prefix']
                                        );
                                    }
                                }

                                $this->data['options'][] = array(
                                    'product_option_id' => $option['product_option_id'],
                                    'option_id'         => $option['option_id'],
                                    'name'              => $option['name'],
                                    'type'              => $option['type'],
                                    'option_value'      => $option_value_data,
                                    'required'          => $option['required']
                                );
                            } elseif ($option['type'] == 'text' || $option['type'] == 'textarea' || $option['type'] == 'file' || $option['type'] == 'date' || $option['type'] == 'datetime' || $option['type'] == 'time') {
                                $this->data['options'][] = array(
                                    'product_option_id' => $option['product_option_id'],
                                    'option_id'         => $option['option_id'],
                                    'name'              => $option['name'],
                                    'type'              => $option['type'],
                                    'option_value'      => $option['value'],
                                    'required'          => $option['required']
                                );
                            }
                        }

                        $this->data['products'][$result] = array(
                            'product_id' => $product_info['product_id'],
                            'thumb'   	 => $image,
                            'name'    	 => $product_info['name'],
                            'quantity'   => 1,
                            'price'   	 => $price,
                            'special' 	 => $special,
                            'rating'     => $rating,
                            'reviews'    => sprintf($this->language->get('text_reviews'), (int)$product_info['reviews']),
                            'href'    	 => $this->url->link('product/product', 'product_id=' . $product_info['product_id']),
                            'options'    => $this->data['options']
                        );

                    } else {
                        $this->data['products'][$result]['quantity'] += 1;
                    }
                }
            }
		}

        echo $this->load->view($this->modulePath.'/options', $this->data);
        exit;

	}

    public function listing() {
        $this->load->language($this->modulePath);

        $language_strings = $this->language->load($this->modulePath);
        foreach ($language_strings as $code => $languageVariable) {
            $this->data[$code] = $languageVariable;
        }

		$this->document->addScript('catalog/view/javascript/'.$this->moduleName.'/fancybox/jquery.fancybox.pack.js');
		$this->document->addStyle('catalog/view/javascript/'.$this->moduleName.'/fancybox/jquery.fancybox.css');

		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
		$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

		$this->data['moduleData'] = $this->config->get('so_product_bundles');
		$picture_width = !empty($this->data['moduleData']['ListingPictureWidth']) && (int)$this->data['moduleData']['ListingPictureWidth'] > 0 ? $this->data['moduleData']['ListingPictureWidth'] : '100';
		$picture_height = !empty($this->data['moduleData']['ListingPictureHeight']) && (int)$this->data['moduleData']['ListingPictureHeight'] ? $this->data['moduleData']['ListingPictureHeight'] : '100';

		$this->document->setTitle($this->language->get('listing_heading_title'));
		
		$this->data['heading_title'] = $this->language->get('listing_heading_title');

        $this->data['breadcrumbs']      = array();
		$this->data['breadcrumbs'][]    = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/home'),
            'separator' => false
        );
        $this->data['breadcrumbs'][]    = array(
            'text'      => $this->language->get('text_breadcrumb'),
            'href'      => $this->url->link($this->modulePath.'/listing'),
            'separator' => $this->language->get('text_separator')
        );


		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

        if (isset($this->data['moduleData']['ListingLimit'])) {
			$limit = $this->data['moduleData']['ListingLimit'];
		} else {
			$limit = 10;
		}

        $bundles = array();
        $filter = array(
            'limit' => $limit,
            'page'  => $page
        );

        $bundles = $this->moduleModel->getBundles($filter);
        $total_bundles = $this->moduleModel->getTotalBundles($filter);

        $this->data['bundles'] = array();

        if ($bundles) {
            foreach ($bundles as $index => $bundle) {
                $total_price = 0;
				$total_price_no_taxes = 0;

                $this->data['bundles'][$bundle['id']] = array();
                $this->data['bundles'][$bundle['id']]['id'] = $bundle['id'];
                $this->data['bundles'][$bundle['id']]['products'] = array();
                $this->data['bundles'][$bundle['id']]['product_options'] = 'false';

                foreach ($bundle['products'] as $product_id) {
                    $product_info = $this->model_catalog_product->getProduct($product_id);

                    if (!isset($this->data['bundles'][$bundle['id']]['products'][$product_id])) {

                        if ($product_info['image']) {
                            $image = $this->model_tool_image->resize($product_info['image'], $picture_width, $picture_height);
                        } else {
                            $image = false;
                        }

                        if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                            $price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->currency_code);
                        } else {
                            $price = false;
                        }

                        if ((float)$product_info['special']) {
                            $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->currency_code);

                            $total_price += $this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                            $total_price_no_taxes += $product_info['special'];
                        } else {
                            $special = false;

                            $total_price += $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                            $total_price_no_taxes += $product_info['price'];
                        }

                        $product_options = $this->model_catalog_product->getProductOptions($product_id);
                        if (!empty($product_options)) {
                            $this->data['bundles'][$bundle['id']]['product_options'] = 'true';
                        }

                        $this->data['bundles'][$bundle['id']]['products'][$product_id] = array(
                            'product_id' => $product_id,
                            'quantity'	 => 1,
                            'thumb'   	 => $image,
                            'name'    	 => $product_info['name'],
                            'price'   	 => $price,
                            'special' 	 => $special,
                            'href'    	 => $this->url->link('product/product', 'product_id=' . $product_id)
                        );

                    } else {
                        if ((float)$product_info['special']) {
                            $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->currency_code);

                            $total_price += $this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                            $total_price_no_taxes += $product_info['special'];
                        } else {
                            $special = false;

                            $total_price += $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                            $total_price_no_taxes += $product_info['price'];
                        }

                        $this->data['bundles'][$bundle['id']]['products'][$product_id]['quantity'] += 1;
                    }
                }

                if (isset($this->data['moduleData']['DiscountTaxation']) && $this->data['moduleData']['DiscountTaxation'] == 'no') {
                    if ($bundle['discount_type'] == '1') {
                        $discount_value = $bundle['discount_value'];
                    } else if ($bundle['discount_type'] == '2') {
                        $percentage = $bundle['discount_value']/100;
                        $discount_value = $percentage*$total_price;
                    }
                } else {
                    if ($bundle['discount_type'] == '1') {
                        $discount_value = $bundle['discount_value'];
                    } else if ($bundle['discount_type'] == '2') {
                        $percentage = $bundle['discount_value']/100;
                        $discount_value = $percentage*$total_price_no_taxes;
                    }
                }

                if (isset($this->data['moduleData']['DiscountTaxation']) && $this->data['moduleData']['DiscountTaxation']=='yes') {
					foreach ($bundle['products'] as $result) {
						$product_info = $this->model_catalog_product->getProduct($result);
						if ((float)$product_info['special']) {
							$ratio = $total_price_no_taxes / $product_info['special'];
						} else {
							$ratio = $total_price_no_taxes / $product_info['price'];
						}

						$tax_rates = $this->tax->getRates((float)$discount_value / $ratio, $product_info['tax_class_id']);
						foreach ($tax_rates as $tax_rate) {
							if ($tax_rate['type'] == 'P') {
								$total_price -= $tax_rate['amount'];
							}
						}
					}
				}

                $final_price = $total_price - $discount_value;
                $this->data['bundles'][$bundle['id']]['discount_value'] = $discount_value;
				$this->data['bundles'][$bundle['id']]['total_price'] = $this->currency->format($total_price, $this->currency_code);
				$this->data['bundles'][$bundle['id']]['discount_value'] = $this->currency->format($discount_value, $this->currency_code);
				$this->data['bundles'][$bundle['id']]['final_price'] = $this->currency->format($final_price, $this->currency_code);

                if (!empty($bundle['name'][$this->config->get('config_language_id')])) {
					$this->data['bundles'][$bundle['id']]['name'] = $bundle['name'][$this->config->get('config_language_id')];
				} else {
					$this->data['bundles'][$bundle['id']]['name'] = $this->language->get('view_bundle');
				}

                if (!empty($bundle['description'][$this->config->get('config_language_id')])) {
					$this->data['bundles'][$bundle['id']]['description'] = $bundle['description'][$this->config->get('config_language_id')];
				} else {
					$this->data['bundles'][$bundle['id']]['description'] = $this->language->get('view_bundle');
				}

                $this->data['bundles'][$bundle['id']]['description'] = html_entity_decode($this->data['bundles'][$bundle['id']]['description'], ENT_QUOTES, 'UTF-8');

                $this->data['bundles'][$bundle['id']]['url'] = $this->url->link($this->modulePath . '/view', 'bundle_id=' . $bundle['id'], 'SSL');


            }

        }

		$url = '';

        $total = $total_bundles;
		$pagination = new Pagination();
		$pagination->total = $total;
		$pagination->page = $page;
		$pagination->limit = $limit;
		$pagination->url = $this->url->link($this->modulePath.'/listing', $url.'&page={page}');
		$this->data['pagination'] = $pagination->render();
		$this->data['results'] = sprintf($this->language->get('text_pagination'), ($total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($total - $limit)) ? $total : ((($page - 1) * $limit) + $limit), $total, ceil($total / $limit));

        if (file_exists('catalog/view/theme/' . $this->config->get('config_template') .'/stylesheet/' .$this->moduleName. '/styles.css')) {
			$this->document->addStyle('catalog/view/theme/'. $this->getConfigTemplate() . '/stylesheet/'.$this->moduleName.'/styles.css?v=' . $this->moduleVersion);
		} else {
			$this->document->addStyle('catalog/view/theme/default/stylesheet/'.$this->moduleName.'/styles.css?v=' . $this->moduleVersion);
		}

		$this->data['column_left'] = $this->load->controller('common/column_left');
		$this->data['column_right'] = $this->load->controller('common/column_right');
		$this->data['content_top'] = $this->load->controller('common/content_top');
		$this->data['content_bottom'] = $this->load->controller('common/content_bottom');
		$this->data['footer'] = $this->load->controller('common/footer');
		$this->data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view($this->modulePath.'/listing', $this->data));
	}

    public function view() {
        $this->load->language($this->modulePath);

        $language_strings = $this->language->load($this->modulePath);
        foreach ($language_strings as $code => $languageVariable) {
            $this->data[$code] = $languageVariable;
        }

		$this->document->addScript('catalog/view/javascript/'.$this->moduleName.'/fancybox/jquery.fancybox.pack.js');
		$this->document->addStyle('catalog/view/javascript/'.$this->moduleName.'/fancybox/jquery.fancybox.css');

		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
		$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

		$this->data['breadcrumbs'] = array();

		$this->data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$this->data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_breadcrumb'),
			'href' => $this->url->link($this->modulePath.'/listing')
		);

		$this->data['moduleData'] = $this->config->get($this->moduleName);

      	$this->data['heading_title'] = $this->language->get('heading_title');
		$picture_width = isset($this->data['moduleData']['ViewWidth']) && (int)$this->data['moduleData']['ViewWidth'] > 0 ? $this->data['moduleData']['ViewWidth'] : '100';
		$picture_height = isset($this->data['moduleData']['ViewHeight']) && (int)$this->data['moduleData']['ViewHeight'] > 0 ? $this->data['moduleData']['ViewHeight'] : '100';
		$bundle_id = (isset($this->request->get['bundle_id']) && !empty($this->request->get['bundle_id'])) ? $this->request->get['bundle_id'] : 0;

        $bundle_data = $this->moduleModel->getBundle($bundle_id);
        $bundle_data = is_array($bundle_data) ? current($bundle_data) : array();

		if (!empty($bundle_data)) {
            $this->moduleModel->addActivity($bundle_id, 'view');

            $total_price = 0;
            $total_price_no_taxes = 0;

            $this->data['bundle'] = array();
            $this->data['bundle']['id'] = $bundle_data['id'];
            $this->data['bundle']['products'] = array();
            $this->data['bundle']['product_options'] = 'false';

            foreach ($bundle_data['products'] as $product_id) {
                $product_info = $this->model_catalog_product->getProduct($product_id);

                if (!isset($this->data['bundle']['products'][$product_id])) {

                    if ($product_info['image']) {
                        $image = $this->model_tool_image->resize($product_info['image'], $picture_width, $picture_height);
                    } else {
                        $image = false;
                    }

                    if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                        $price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->currency_code);
                    } else {
                        $price = false;
                    }

                    if ((float)$product_info['special']) {
                        $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->currency_code);

                        $total_price += $this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                        $total_price_no_taxes += $product_info['special'];
                    } else {
                        $special = false;

                        $total_price += $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                        $total_price_no_taxes += $product_info['price'];
                    }

                    $product_options = $this->model_catalog_product->getProductOptions($product_id);
                    if (!empty($product_options)) {
                        $this->data['bundle']['product_options'] = 'true';
                    }

                    $this->data['bundle']['products'][$product_id] = array(
                        'product_id' => $product_id,
                        'quantity'	 => 1,
                        'thumb'   	 => $image,
                        'name'    	 => $product_info['name'],
                        'price'   	 => $price,
                        'special' 	 => $special,
                        'description'=> html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8'),
                        'href'    	 => $this->url->link('product/product', 'product_id=' . $product_id)
                    );

                } else {
                    if ((float)$product_info['special']) {
                        $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->currency_code);

                        $total_price += $this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                        $total_price_no_taxes += $product_info['special'];
                    } else {
                        $special = false;

                        $total_price += $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                        $total_price_no_taxes += $product_info['price'];
                    }

                   $this->data['bundle']['products'][$product_id]['quantity'] += 1;
                }
            }

            if (isset($this->data['moduleData']['DiscountTaxation']) && $this->data['moduleData']['DiscountTaxation'] == 'no') {
                if ($bundle_data['discount_type'] == '1') {
                    $discount_value = $bundle_data['discount_value'];
                } else if ($bundle_data['discount_type'] == '2') {
                    $percentage = $bundle_data['discount_value']/100;
                    $discount_value = $percentage*$total_price;
                }
            } else {
                if ($bundle_data['discount_type'] == '1') {
                    $discount_value = $bundle_data['discount_value'];
                } else if ($bundle_data['discount_type'] == '2') {
                    $percentage = $bundle_data['discount_value']/100;
                    $discount_value = $percentage*$total_price_no_taxes;
                }
            }

            if (isset($this->data['moduleData']['DiscountTaxation']) && $this->data['moduleData']['DiscountTaxation']=='yes') {
                foreach ($bundle_data['products'] as $result) {
                    $product_info = $this->model_catalog_product->getProduct($result);
                    if ((float)$product_info['special']) {
                        $ratio = $total_price_no_taxes / $product_info['special'];
                    } else {
                        $ratio = $total_price_no_taxes / $product_info['price'];
                    }

                    $tax_rates = $this->tax->getRates((float)$discount_value / $ratio, $product_info['tax_class_id']);
                    foreach ($tax_rates as $tax_rate) {
                        if ($tax_rate['type'] == 'P') {
                            $total_price -= $tax_rate['amount'];
                        }
                    }
                }
            }

            $final_price = $total_price - $discount_value;
            $this->data['bundle']['discount_value'] = $discount_value;
            $this->data['bundle']['total_price'] = $this->currency->format($total_price, $this->currency_code);
            $this->data['bundle']['discount_value'] = $this->currency->format($discount_value, $this->currency_code);
            $this->data['bundle']['final_price'] = $this->currency->format($final_price, $this->currency_code);

            if (!empty($bundle_data['name'][$this->config->get('config_language_id')])) {
                $this->data['bundle']['name'] = $bundle_data['name'][$this->config->get('config_language_id')];
                $this->data['heading_title']  = $bundle_data['name'][$this->config->get('config_language_id')];
            } else {
                $this->data['bundle']['name'] = $this->language->get('view_bundle');
                $this->data['heading_title'] = $this->language->get('view_bundle');
            }

            if (!empty($bundle_data['description'][$this->config->get('config_language_id')])) {
                $this->data['bundle']['description'] = $bundle_data['description'][$this->config->get('config_language_id')];
            } else {
                $this->data['bundle']['description'] = $this->language->get('view_bundle');
            }

            $this->data['bundle']['description'] = html_entity_decode($this->data['bundle']['description'], ENT_QUOTES, 'UTF-8');

            $this->data['bundle']['url'] = $this->url->link($this->modulePath . '/view', 'bundle_id=' . $bundle_data['id'], 'SSL');

			$this->document->setTitle($this->data['heading_title']);

			$this->data['breadcrumbs'][] = array(
				'text' => $this->data['heading_title'],
				'href' => $this->url->link($this->modulePath.'/view', 'bundle_id='.$bundle_id)
			);

        	$this->document->addStyle('catalog/view/theme/default/stylesheet/'.$this->moduleName.'/styles.css?v=' . $this->moduleVersion);
			
			$this->data['column_left'] = $this->load->controller('common/column_left');
			$this->data['column_right'] = $this->load->controller('common/column_right');
			$this->data['content_top'] = $this->load->controller('common/content_top');
			$this->data['content_bottom'] = $this->load->controller('common/content_bottom');
			$this->data['footer'] = $this->load->controller('common/footer');
			$this->data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view($this->modulePath.'/view', $this->data));
		} else {
			$this->data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link($this->modulePath.'/view', 'bundle_id=' . $bundle_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$this->data['heading_title'] = $this->language->get('text_error');
			$this->data['text_error'] = $this->language->get('text_error');
			$this->data['button_continue'] = $this->language->get('button_continue');
			$this->data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$this->data['column_left'] = $this->load->controller('common/column_left');
			$this->data['column_right'] = $this->load->controller('common/column_right');
			$this->data['content_top'] = $this->load->controller('common/content_top');
			$this->data['content_bottom'] = $this->load->controller('common/content_bottom');
			$this->data['footer'] = $this->load->controller('common/footer');
			$this->data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('error/not_found', $this->data));
		}
	}

    protected function getConfigTemplate(){
		if ($this->config->get($this->config->get('config_theme') . '_directory') == null) {
			if ($this->config->get(('config_theme')) == 'theme_journal3') {
				return 'journal3';
			}
		}else{
			return  $this->config->get($this->config->get('config_theme') . '_directory');
		}
	}
    
    public function orderActivity($route, &$data) {
        if (!empty($this->session->data['productbundles'])) {
            $this->config->load('so_product_bundles');
            $call_model = $this->config->get('productbundles_model');
            $module_path = $this->config->get('productbundles_path');
            $this->load->model($module_path);

            foreach ($this->session->data['productbundles'] as $bundle_id => $bool) {
                $this->$call_model->addActivity($bundle_id, 'order');
            }

            unset($this->session->data['productbundles']);
        }
    }
}
