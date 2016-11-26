<?php
class Servicios extends CI_Controller {
	public function index(){
		$page = 'index';
		if ( ! file_exists(APPPATH.'views/servicios/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('base/header', $data);
		$this->load->view('servicios/'.$page, $data);
		$this->load->view('base/footer', $data);
	}

	function view($page){
		if ( ! file_exists(APPPATH.'views/servicios/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('base/header', $data);
		$this->load->view('servicios/'.$page, $data);
		$this->load->view('base/footer', $data);
	}
	
}