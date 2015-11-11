<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_denuncias extends CI_Controller {

	public function index()
	{
		redirect('/registros_denuncias/mostrar_dependencias');
	}

	public function mostrar_dependencias()
	{
		$this->load->model('model_dependencias');
		
		$data = array(
				'dependecias'=> $this->model_dependencias->show_all(),
				'dump'=>0
				);

		$this->load->view('template/header');
		$this->load->view('LAY/registros',$data);
		$this->load->view('template/footer');



	}
}
