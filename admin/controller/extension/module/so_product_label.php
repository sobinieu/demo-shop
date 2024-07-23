<?php
class ControllerExtensionModuleSoProductLabel extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/so_product_label');
		$this->document->setTitle($this->language->get('heading_title'));
		$data['objlang']	= $this->language;
		
		$this->load->model('setting/module');
		$this->load->model('setting/setting');
		$this->load->model('extension/module/so_product_label');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$action = isset($this->request->post["action"]) ? $this->request->post["action"] : "";
			unset($this->request->post['action']);

			$this->model_setting_setting->editSetting('module_so_product_label', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			if($action == "save_edit") {
				$this->response->redirect($this->url->link('extension/module/so_product_label', 'user_token=' . $this->session->data['user_token'], 'SSL'));
			}else{
				$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
			}
		}

		// Save and Stay --------------------------------------------------------------
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], 'SSL')
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/so_product_label', 'user_token=' . $this->session->data['user_token'], 'SSL')
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/so_product_label', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], 'SSL')
			);			
		}

		$data['user_token']		= $this->session->data['user_token'];

		// Get Language
		$data['heading_title'] 		= $this->language->get('heading_title');
		$data['heading_title_so'] 	= $this->language->get('heading_title_so');
		
		$data['entry_button_save_and_edit'] 	= $this->language->get('entry_button_save_and_edit');
		
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_show_category'] = $this->language->get('entry_show_category');
		$data['entry_show_product'] = $this->language->get('entry_show_product');
		$data['entry_show_search'] = $this->language->get('entry_show_search');
		$data['entry_show_special'] = $this->language->get('entry_show_special');
		$data['entry_show_manufacturer'] = $this->language->get('entry_show_manufacturer');
		$data['entry_show_compare'] = $this->language->get('entry_show_compare');
		$data['entry_show_featured'] = $this->language->get('entry_show_featured');
		$data['entry_show_bestseller'] = $this->language->get('entry_show_bestseller');
		$data['entry_show_lastest'] = $this->language->get('entry_show_lastest');
		$data['entry_show_special_mod'] = $this->language->get('entry_show_special_mod');
		
		$data['help_status'] = $this->language->get('help_status');
		$data['help_show_category'] = $this->language->get('help_show_category');
		$data['help_show_product'] = $this->language->get('help_show_product');
		$data['help_show_search'] = $this->language->get('help_show_search');
		$data['help_show_special'] = $this->language->get('help_show_special');
		$data['help_show_mannufacturer'] = $this->language->get('help_show_mannufacturer');
		$data['help_show_compare'] = $this->language->get('help_show_compare');
		$data['help_show_featured'] = $this->language->get('help_show_featured');
		$data['help_show_bestseller'] = $this->language->get('help_show_bestseller');
		$data['help_show_lastest'] = $this->language->get('help_show_lastest');
		$data['help_show_special_mod'] = $this->language->get('help_show_special_mod');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/so_product_label', 'user_token=' . $this->session->data['user_token'], 'SSL');
		} else {
			$data['action'] = $this->url->link('extension/module/so_product_label', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], 'SSL');
		}
		
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		
		if (isset($this->request->post['module_so_product_label_status'])) {
			$data['module_so_product_label_status'] = $this->request->post['module_so_product_label_status'];
		} else {
			$data['module_so_product_label_status'] = $this->config->get('module_so_product_label_status');
		}

		if (isset($this->request->post['module_so_product_label_show_category'])) {
			$data['module_so_product_label_show_category'] = $this->request->post['module_so_product_label_show_category'];
		} else {
			$data['module_so_product_label_show_category'] = $this->config->get('module_so_product_label_show_category');
		}

		if (isset($this->request->post['module_so_product_label_show_product'])) {
			$data['module_so_product_label_show_product'] = $this->request->post['module_so_product_label_show_product'];
		} else {
			$data['module_so_product_label_show_product'] = $this->config->get('module_so_product_label_show_product');
		}

		if (isset($this->request->post['module_so_product_label_show_search'])) {
			$data['module_so_product_label_show_search'] = $this->request->post['module_so_product_label_show_search'];
		} else {
			$data['module_so_product_label_show_search'] = $this->config->get('module_so_product_label_show_search');
		}

		if (isset($this->request->post['module_so_product_label_show_special'])) {
			$data['module_so_product_label_show_special'] = $this->request->post['module_so_product_label_show_special'];
		} else {
			$data['module_so_product_label_show_special'] = $this->config->get('module_so_product_label_show_special');
		}

		if (isset($this->request->post['module_so_product_label_show_manufacturer'])) {
			$data['module_so_product_label_show_manufacturer'] = $this->request->post['module_so_product_label_show_manufacturer'];
		} else {
			$data['module_so_product_label_show_manufacturer'] = $this->config->get('module_so_product_label_show_manufacturer');
		}

		if (isset($this->request->post['module_so_product_label_show_featured'])) {
			$data['module_so_product_label_show_featured'] = $this->request->post['module_so_product_label_show_featured'];
		} else {
			$data['module_so_product_label_show_featured'] = $this->config->get('module_so_product_label_show_featured');
		}

		if (isset($this->request->post['module_so_product_label_show_bestseller'])) {
			$data['module_so_product_label_show_bestseller'] = $this->request->post['module_so_product_label_show_bestseller'];
		} else {
			$data['module_so_product_label_show_bestseller'] = $this->config->get('module_so_product_label_show_bestseller');
		}

		if (isset($this->request->post['module_so_product_label_show_lastest'])) {
			$data['module_so_product_label_show_lastest'] = $this->request->post['module_so_product_label_show_lastest'];
		} else {
			$data['module_so_product_label_show_lastest'] = $this->config->get('module_so_product_label_show_lastest');
		}

		if (isset($this->request->post['module_so_product_label_show_special_mod'])) {
			$data['module_so_product_label_show_special_mod'] = $this->request->post['module_so_product_label_show_special_mod'];
		} else {
			$data['module_so_product_label_show_special_mod'] = $this->config->get('module_so_product_label_show_special_mod');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/so_product_label', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/so_product_label')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function is_table_exist($table){
        $query = $this->db->query("SHOW TABLES LIKE '".$table."'");
        if( count($query->rows) <= 0 ) {
            return true;
        }
        return false;
    }

	function install() {
		if($this->is_table_exist(DB_PREFIX . "so_product_label")) {
			$this->db->query("
				CREATE TABLE `".DB_PREFIX."so_product_label` (
					`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
					`product_id` int(11) NOT NULL,
					`status` tinyint(1) NOT NULL,
					`show_category` tinyint(1) NOT NULL,
					`show_product` tinyint(1) NOT NULL,
					`type` tinyint(1) NOT NULL,
					`position` varchar(50) NOT NULL,
					`image` varchar(255) DEFAULT NULL,
					`text` varchar(100) DEFAULT NULL,
					`color` char(7) DEFAULT NULL,
					`bgcolor` char(7) DEFAULT NULL,
					`fontsize` char(2) DEFAULT NULL,
					`width` int(3) DEFAULT NULL,
					`height` int(3) DEFAULT NULL,
					`start_date` datetime NOT NULL,
					`end_date` datetime NOT NULL,
					`custom_class` varchar(100) DEFAULT NULL,
					PRIMARY KEY (`id`)
				) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;");
		}
	}

	function uninstall() {
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "so_product_label`");
	}
}