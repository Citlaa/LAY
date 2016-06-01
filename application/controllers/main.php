<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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


	public function reportes()
	{
		if ($this->tank_auth->is_logged_in()) {
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('LAY/reportes');
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


	public function catalogo2()
	{
		$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();	
		if ($this->tank_auth->is_logged_in()) {
		$this->load->view('template/header');
		$this->load->view('template/menu',$data);
		$this->load->view('LAY/index2');
		$this->load->view('template/footer');
		  }else{
			echo "no permisos";
		}
	 
	}

	public function ciudadanos()
	{		
		if ($this->tank_auth->is_logged_in()) {
		redirect('/ciudadanos/');
		/*
		$this->load->view('template/header');
		$this->load->view('LAY/ciudadanos');
		$this->load->view('template/footer');
		*/
		 }else{
			echo "no permisos";
		}
	}

}