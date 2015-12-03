<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Direcciones extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('date');
		/* ------------------ */

		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
			redirect(direcciones/editar_direccion);
	}

	function _example_output($output = null)

	{
		$this->load->view('our_template.php',$output);
	}


	public function editar_direccion($idDenuncia=null)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model(array('model_direccion','model_denuncias'));

		$this->form_validation->set_rules('colonia', 'Colonia', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$data['direccion']=$this->model_direccion->get_direccion_denuncia($idDenuncia);
			//$this->load->view('template/header.php');
			$this->load->view('direcciones/edicion_direccion', $data);
			//$this->load->view('template/footer.php');
		}
		 else
		 {
			 $this->model_direccion->update_direccion();
				 $this->load->view('direcciones/exito');
		 }

	}

	public function edicion_direccion_ajax()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('calle', 'Calle', 'required');
		$this->load->model(array('model_direccion'));

		$query = $this->model_direccion->update_direccion();
		echo json_encode($query);
	}

	public function	direccion_autocomplete_colonia(){
		$this->load->model(array('model_direccion'));
		if ($this->input->get('term')) {
			$q = $this->input->get('term');
			$query = $this->model_direccion->direccion_autocomplete_colonia($q);
		}
		echo json_encode($query);
	}

	public function direccion_autocomplete()
	{
		$this->load->model(array('model_direccion'));
		if ($this->input->get('term')) {
			$q = $this->input->get('term');
			$query = $this->model_direccion->direccion_autocomplete($q);
		}
		echo json_encode($query);
	}

}
