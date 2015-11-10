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

		$this->form_validation->set_rules('dependencia','Dependencia','required|is_unique[dependencias.dependencia]');
		$this->form_validation->set_rules('titular','Titular','required');
		$this->form_validation->set_rules('calle','Calle','required');
		$this->form_validation->set_rules('numExt','Numero Exterior','required');
		$this->form_validation->set_rules('colonia','Colonia','required');
		$this->form_validation->set_rules('cp','C.P.','required');
		$this->form_validation->set_rules('localidad','Localidad','required');
		$this->form_validation->set_rules('tel1','Telefono 1','required');

		$this->form_validation->set_message('is_unique',"Esa dependencia ya existe");

		if($this->form_validation->run())
		{
			
			$this->load->model('model_dependencias');

			if($this->model_dependencias->add_dependencia())
			{
				redirect('/dependencias/');	
			}else{
				echo "registro no exitoso";
				
				redirect('/dependencias/');
			}

		}else{
			$this->load->view('template/header');
		$this->load->view('LAY/dependencias');
		$this->load->view('template/footer');
		}

	}



}