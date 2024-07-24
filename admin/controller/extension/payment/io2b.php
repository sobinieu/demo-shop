<?php
class ControllerExtensionPaymentIo2b extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/payment/io2b');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('payment_io2b', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['merchant'])) {
			$data['error_merchant'] = $this->error['merchant'];
		} else {
			$data['error_merchant'] = '';
		}

		if (isset($this->error['signature'])) {
			$data['error_signature'] = $this->error['signature'];
		} else {
			$data['error_signature'] = '';
		}

		if (isset($this->error['type'])) {
			$data['error_type'] = $this->error['type'];
		} else {
			$data['error_type'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payment/io2b', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/payment/io2b', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);

		if (isset($this->request->post['payment_io2b_merchant'])) {
			$data['payment_io2b_merchant'] = $this->request->post['payment_io2b_merchant'];
		} else {
			$data['payment_io2b_merchant'] = $this->config->get('payment_io2b_merchant');
		}

		if (isset($this->request->post['payment_io2b_url'])) {
			$data['payment_io2b_url'] = $this->request->post['payment_io2b_url'];
		} else {
			$data['payment_io2b_url'] = $this->config->get('payment_io2b_url');
		}

		if (isset($this->request->post['payment_io2b_webhook'])) {
			$data['payment_io2b_webhook'] = $this->request->post['payment_io2b_webhook'];
		} else {
			$data['payment_io2b_webhook'] = $this->config->get('payment_io2b_webhook');
		}

		if (isset($this->request->post['payment_io2b_signature'])) {
			$data['payment_io2b_signature'] = $this->request->post['payment_io2b_signature'];
		} else {
			$data['payment_io2b_signature'] = $this->config->get('payment_io2b_signature');
		}

		if (isset($this->request->post['payment_io2b_type'])) {
			$data['payment_io2b_type'] = $this->request->post['payment_io2b_type'];
		} else {
			$data['payment_io2b_type'] = $this->config->get('payment_io2b_type');
		}

		if (isset($this->request->post['payment_io2b_total'])) {
			$data['payment_io2b_total'] = $this->request->post['payment_io2b_total'];
		} else {
			$data['payment_io2b_total'] = $this->config->get('payment_io2b_total');
		}

		if (isset($this->request->post['payment_io2b_order_status_id'])) {
			$data['payment_io2b_order_status_id'] = $this->request->post['payment_io2b_order_status_id'];
		} else {
			$data['payment_io2b_order_status_id'] = $this->config->get('payment_io2b_order_status_id');
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['payment_io2b_geo_zone_id'])) {
			$data['payment_io2b_geo_zone_id'] = $this->request->post['payment_io2b_geo_zone_id'];
		} else {
			$data['payment_io2b_geo_zone_id'] = $this->config->get('payment_io2b_geo_zone_id');
		}

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		if (isset($this->request->post['payment_io2b_status'])) {
			$data['payment_io2b_status'] = $this->request->post['payment_io2b_status'];
		} else {
			$data['payment_io2b_status'] = $this->config->get('payment_io2b_status');
		}

		if (isset($this->request->post['payment_io2b_sort_order'])) {
			$data['payment_io2b_sort_order'] = $this->request->post['payment_io2b_sort_order'];
		} else {
			$data['payment_io2b_sort_order'] = $this->config->get('payment_io2b_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/io2b', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/io2b')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['payment_io2b_merchant']) {
			$this->error['merchant'] = $this->language->get('error_merchant');
		}

		if (!$this->request->post['payment_io2b_url']) {
			$this->error['merchant'] = $this->language->get('error_url');
		}

		if (!$this->request->post['payment_io2b_webhook']) {
			$this->error['merchant'] = $this->language->get('error_webhook');
		}

		return !$this->error;
	}
}