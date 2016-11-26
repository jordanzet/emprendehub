<?php
class Branding extends CI_Controller {
	
	public function index(){
		$page = 'index';
		if ( ! file_exists(APPPATH.'views/branding/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('branding/'.$page);
		$this->load->view('base/footer');
	}

	function disenomarca(){
		$page = 'disenomarca';
		if ( ! file_exists(APPPATH.'views/branding/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('branding/'.$page);
		$this->load->view('base/footer');
	}

	function icorp(){
		$page = 'icorp';
		if ( ! file_exists(APPPATH.'views/branding/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('branding/'.$page);
		$this->load->view('base/footer');
	}

	function ecorp(){
		$page = 'ecorp';
		if ( ! file_exists(APPPATH.'views/branding/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('branding/'.$page);
		$this->load->view('base/footer');
	}
}