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


	public function estatus()
	{
		
		$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();	
		if ($this->tank_auth->is_logged_in()) {
			$this->load->model('model_estatus');
			$data['pen'] = $this->model_estatus->grafica_pen();
			$data['aten'] = $this->model_estatus->grafica_aten();
			$this->load->view('template/header');
			$this->load->view('template/menu',$data);
			$this->load->view('LAY/graficas');
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


	

}