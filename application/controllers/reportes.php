<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('date');
		/* ------------------ */
		// $this->load->library('word');
		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
		redirect('/reportes/mostrar_reportes');
	}

	public function show_periodo2(){
		$data1['user_id']	= $this->tank_auth->get_user_id();
		$data1['username']	= $this->tank_auth->get_username();
		if ($this->tank_auth->is_logged_in()) {
			$data['inicio'] = $this->input->get('date1');
			$data['fin'] = $this->input->get('date2');
			$this->load->view('template/header');
			$this->load->view('template/menu',$data1);
			$this->load->view('LAY/periodo2', $data);
			$this->load->view('template/footer');
		}else{
			echo "no permisos";
		}
	}

	public function mostrar_reportes()
	{
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		if ($this->tank_auth->is_logged_in()) {
			$this->load->model('model_estatus');
			$data['estatuses'] = $this->model_estatus->get_all();
			$this->load->view('template/header');
			$this->load->view('template/menu',$data);
			$this->load->view('LAY/reportes');
			$this->load->view('template/footer');
		}else{
			echo "usted no tiene permisos";
		}

	}
	
	public function periodo(){

		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();

		if ($this->tank_auth->is_logged_in()) {
			$this->load->view('template/header');
			$this->load->view('template/menu',$data);
			$this->load->view('LAY/periodo');
			$this->load->view('template/footer');
		}else{
			echo "usted no tiene permisos";
		}

	}

	public function mostrar_periodo()
	{

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('LAY/reportes2');
		$this->load->view('template/footer');
	}

	function _example_output($output = null)
	{
		$this->load->view('our_template.php',$output);
	}

	public function get_all()
	{
		$this->load->model(array('model_denuncias'));
		var_dump($this->model_denuncias->get_all());
	}

	public function get_all_html(){

	}
}
