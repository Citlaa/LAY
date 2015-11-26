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

	

}
