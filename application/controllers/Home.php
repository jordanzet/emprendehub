<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('home', $data);
	}
}
