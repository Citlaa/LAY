<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ciudadanos extends CI_Controller {

	public function index()
	{
		redirect('/ciudadanos/mostrar_ciudadanos');
	}

	public function mostrar_ciudadanos()
	{
		$this->load->model('model_ciudadano');
		$data = array(
				'ciudadanos'=> $this->model_ciudadano->show_all(),
				'dump'=>0
				);

		$this->load->view('template/header');
		$this->load->view('LAY/ciudadanos',$data);
		$this->load->view('template/footer');

	}

	public function info_ciudadanos($idCiudadano)
	{
		$this->load->model('model_ciudadano');
		$data = array(
				'ciudadanos'=> $this->model_ciudadano->show_ciudadano($idCiudadano),
				'dump'=>0
				);

		$this->load->view('template/header');
		$this->load->view('LAY/info_ciudadanos',$data);
		$this->load->view('template/footer');

	}




}