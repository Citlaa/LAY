<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dependencias extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('LAY/dependencias');
		$this->load->view('template/footer');
	}


	public function dependencia_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('dependencia','Dependencia','required');
		$this->form_validation->set_rules('titular','Titular','required');
		$this->form_validation->set_rules('calle','Calle','required');
		$this->form_validation->set_rules('numExt','Numero Exterior','required');
		$this->form_validation->set_rules('colonia','Colonia','required');
		$this->form_validation->set_rules('cp','C.P.','required');
		$this->form_validation->set_rules('localidad','Localidad','required');
		$this->form_validation->set_rules('tel1','Telefono 1','required');

		if($this->form_validation->run())
		{
			redirect('/dependencias/');	
		}else{
			$this->load->view('template/header');
		$this->load->view('LAY/dependencias');
		$this->load->view('template/footer');
		}

	}



}