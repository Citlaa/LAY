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
			//$this->load->view('template/header.php');
			$this->load->view('asuntos/edicion_asunto', $data);			
			//$this->load->view('template/footer.php');
		}
		 else
		 {
			 $this->model_asunto->update_asunto();
				 $this->load->view('asuntos/exito');
		 }

	}

	public function add_asunto($idDenuncia=null)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model(array('model_ciudadano','model_denuncias'));

		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		
			
				$this->load->model('model_recepcion');
				$data['recepcion'] = $this->model_recepcion->get_all();
				$this->load->model('model_dependencias');
				$data['dependencias'] = $this->model_dependencias->get_all();
				$this->load->model('model_estatus');
				$data['estatus'] = $this->model_estatus->get_all();
				$this->load->model('model_ciudadano');
				$data['ciudadano']=$this->model_ciudadano->get_ciudadano_denuncia($idDenuncia);
				$this->load->model('model_denuncias');
				$this->load->helper('form');
	 			$this->load->library('form_validation');
				$this->form_validation->set_rules('nombre', 'Nombre', 'required');
				if ($this->form_validation->run() == FALSE)
	 			{
					// $this->load->view('template/header.php');			 		
					// $this->load->view('ciudadanos/edicion_ciudadano.php', $data);
					$this->load->view('denuncias/form_denuncia.php', $data);
					// $this->load->view('template/footer.php');
	 			}
	 			else
	 			{
			 		$this->model_denuncias->insert_denuncia();
			 		$this->load->view('denuncias/exito');
	 			}	 

}
}