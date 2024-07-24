<?php
class ControllerExtensionPaymentIo2b extends Controller {
	public function index() {
		$data['button_confirm'] = $this->language->get('button_confirm');

		$this->load->model('checkout/order');

		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

		$webhook_url = $this->url->link('checkout/success', '', true);

		if($this->config->get('payment_io2b_merchant'))
			$webhook_url = $this->config->get('payment_io2b_merchant');

		$data = [
			'product' => 'Invoice#' . $order_info['invoice_prefix'] . '-' . $order_info['order_id'],
			'amount' => $order_info['total'] * 100,
			'currency' => $order_info['currency_code'],
			'callbackUrl' => $webhook_url,
			'redirectSuccessUrl' => $this->url->link('checkout/success', '', true),
			'redirectFailUrl' => $this->url->link('checkout/success', '', true),
			'orderNumber' => $order_info['order_id'],
			// 'locale' => '',
			'customer' => [
				'email' => $order_info['email'],
				'phone' => $order_info['telephone'],
			],
		];

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $this->config->get('payment_io2b_url'),
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => json_encode($data),
		  CURLOPT_HTTPHEADER => array(
		    "authorization: " . $this->config->get('payment_io2b_merchant'),
		    "content-type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		$response = json_decode($response);

		if(!$response->success) {
			var_dump($response);die;
		}
		$data['redirect'] = $response->processingUrl;
		
		return $this->load->view('extension/payment/io2b', $data);

	}


	public function save() {
		$json = array();

		$this->load->model('checkout/order');

		$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_io2b_order_status_id'));
	
		$json['redirect'] = $this->url->link('checkout/confirm');
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}

	public function confirm() {
		$json = array();

		$this->load->model('checkout/order');

		$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $_GET['status'] == 'approved' ? 5 : 8);
		
		header('Location: /index.php?route=checkout/success');
	}

	public function callback() {
	}
}