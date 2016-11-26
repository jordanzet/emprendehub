<?php
class Merchandising extends CI_Controller {
	
	public function index(){
		$page = 'index';
		if ( ! file_exists(APPPATH.'views/merchandising/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('merchandising/'.$page);
		$this->load->view('base/footer');
	}

	/*function pbasico(){
		$page = 'pbasico';
		if ( ! file_exists(APPPATH.'views/merchandising/'.$page.'.php')){
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('merchandising/'.$page);
		$this->load->view('base/footer');
	}

	function ppremium(){
		$page = 'ppremium';
		if ( ! file_exists(APPPATH.'views/merchandising/'.$page.'.php')){
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('merchandising/'.$page);
		$this->load->view('base/footer');
	}

	function pexclusivo(){
		$page = 'pexclusivo';
		if ( ! file_exists(APPPATH.'views/merchandising/'.$page.'.php')){
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('merchandising/'.$page);
		$this->load->view('base/footer');
	}*/
}