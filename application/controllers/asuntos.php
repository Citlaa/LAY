<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asuntos extends CI_Controller {

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
			redirect(asuntos/editar_asunto);
	}

	function _example_output($output = null)

	{
		$this->load->view('our_template.php',$output);
	}
	

	public function editar_asunto($idDenuncia=null)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model(array('model_asunto','model_denuncias'));

		$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$data['asunto']=$this->model_asunto->get_asunto_denuncia($idDenuncia);
			$this->load->view('template/header.php');
			$this->load->view('asuntos/edicion_asunto', $data);			
			$this->load->view('template/footer.php');
		}
		 else
		 {
			 $this->model_asunto->update_asunto();
				 $this->load->view('asuntos/exito');
		 }

	}

	

}
