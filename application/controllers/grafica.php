<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafica extends CI_Controller {



	public function index()
	{
		$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();	
		if ($this->tank_auth->is_logged_in()) {
			$this->load->view('template/header');
			$this->load->view('template/menu',$data);
			$this->load->view('LAY/index');
			$this->load->view('template/footer');
		}else{
			echo "no permisos";
		}
	}


	public function catalogo()
	{
		 $data['title']='Catalogo';
    	 $this->load->view ('dependencias', $data);
    	 $this->load->view ('ciudadanos', $data);    	 
	}

	public function count_dep()
	{
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();	
		if ($this->tank_auth->is_logged_in()) {
			$this->load->model('model_denuncias');
			$data1 = array('denuncias' => $this->model_denuncias->count_dep());
			$this->load->view('template/header');
			$this->load->view('template/menu',$data);
			$this->load->view('LAY/graficas_dep', $data1);
			$this->load->view('template/footer');
		}else{

		}	
	}

		public function count_estatus()
	{
		
		$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();	
			$this->load->model('model_denuncias');
			$data1 = array('denuncias' => $this->model_denuncias->count_est());
		if ($this->tank_auth->is_logged_in()) {
			$this->load->view('template/header');
			$this->load->view('template/menu',$data);
			$this->load->view('LAY/chart',$data1);
			$this->load->view('template/footer');
		}else{
			echo "no permisos";
		}

	}


	

}