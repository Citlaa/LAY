<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafica extends CI_Controller {



	public function index()
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

	function pie()
	{
		$this->load->library('highcharts');
		$this->load->model('model_estatus');
		$data['pen'] = $this->model_estatus->grafica_pen();
		$data['aten'] = $this->model_estatus->grafica_aten();
	
		$this->load->library('highcharts');
		$serie['data']	= array(
			array('value one', $data['pen']), 
			array('value two', $data['aten']), 
		);
		$callback = "function() { return '<b>'+ this.point.name +'</b>: '+ this.y +' %'}";
		
		@$tool->formatter = $callback;
		@$plot->pie->dataLabels->formatter = $callback;
		
		$this->highcharts
			->set_type('pie')
			->set_serie($serie)
			->set_tooltip($tool)
			->set_plotOptions($plot);
		
		$data['charts'] = $this->highcharts->render();
		$this->load->view('charts', $data);

		print json_encode('charts', $data, JSON_NUMERIC_CHECK);

<<<<<<< HEAD
	}
=======

>>>>>>> f875057990612dc6d08cfc4a2feb31945f223800
	


}