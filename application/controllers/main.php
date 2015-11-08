<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('LAY/index');
		$this->load->view('template/footer');
	}

	public function registros()
	{
		$this->load->view('template/header');
		$this->load->view('LAY/registros');
		$this->load->view('template/footer');
	}

	public function reportes()
	{
		$this->load->view('template/header');
		$this->load->view('LAY/reportes');
		$this->load->view('template/footer');
	}

	public function catalogo()
	{
		 $data['title']='Catalogo';
    	 $this->load->view ('dependencia', $data);
    	 $this->load->view ('ciudadano', $data);    	 
	}
}