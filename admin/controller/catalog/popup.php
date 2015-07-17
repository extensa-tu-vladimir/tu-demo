<?php
class ControllerCatalogPopup extends Controller {
	public function index() {
		$this->load->language('catalog/popup');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('catalog/popup');
		
		$data['action'] = $this->url->link('catalog/popup', 'token=' . $this->session->data['token'], 'SSL');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$this->model_catalog_popup->addPopup($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('catalog/popup', 'token=' . $this->session->data['token'] . $url, 'SSL'));
		}
		$data['entry_title'] = $this->language->get('entry_title');
		$data['entry_text'] = $this->language->get('entry_text');
		$data['button_save'] = $this->language->get('button_save');
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('catalog/popup.tpl', $data));
	}
}
?>