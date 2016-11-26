<?php
class Paginas extends CI_Controller {

	function contacto(){
		$page = 'contacto';
		if ( ! file_exists(APPPATH.'views/paginas/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('paginas/'.$page);
		$this->load->view('base/footer');
	}

	function nosotros(){
		$page = 'nosotros';
		if ( ! file_exists(APPPATH.'views/paginas/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('paginas/'.$page);
		$this->load->view('base/footer');
	}
}