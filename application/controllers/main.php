<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('LAY/index');
		$this->load->view('template/footer');
	}


	public function reportes()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('LAY/reportes');
		$this->load->view('template/footer');
	}

	public function catalogo()
	{
		 $data['title']='Catalogo';
    	 $this->load->view ('dependencias', $data);
    	 $this->load->view ('ciudadanos', $data);    	 
	}

	public function ciudadanos()
	{		
		redirect('/ciudadanos/');
		/*
		$this->load->view('template/header');
		$this->load->view('LAY/ciudadanos');
		$this->load->view('template/footer');
		*/
	}

}