<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ciudadanos extends CI_Controller {

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
		redirect('/ciudadanos/mostrar_ciudadanos');
	}

	function _example_output($output = null)

	{
		$this->load->view('our_template.php',$output);
	}

	public function mostrar_ciudadanos2()
	{
		$grocery = new grocery_CRUD();
		// Asunto dependencia y direcciones del ciudada

		$grocery->set_theme('bootstrap');
		$grocery->set_language('spanish');
		$grocery->set_table('ciudadanos');
		$grocery->add_action('Denuncias','','ciudadanos/denuncias_por_ciudadano');
		$output = $grocery->render();
		$this->_example_output($output);
	}

	public function mostrar_ciudadanos()
	{
		$this->load->model('model_ciudadano');
		$data = array(
			'ciudadanos'=> $this->model_ciudadano->show_all(),
			'dump'=>0
		);

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('LAY/ciudadanos',$data);
		$this->load->view('template/footer');

	}

	public function info_ciudadanos()
	{
		$this->load->model('model_ciudadano');
		$data = array(
			'ciudadanos'=> $this->model_ciudadano->show_ciudadano(),
			'dump'=>0
		);

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('LAY/info_ciudadanos',$data);
		$this->load->view('template/footer');

	}

	public function denuncias_por_ciudadano($idCiudadano)
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap');
		$crud->set_language('spanish');
		$crud->where('denuncias.idCiudadano',$idCiudadano);
		$crud->set_table('denuncias');
		$crud->set_subject('Denuncias Por Ciudadano');
		$crud->set_relation('idCiudadano','ciudadanos','{nombre}\n{apellidoPa}\n{apellidoMa}');
		$crud->set_relation('idRecepcion','recepcion','descripcion');
		$crud->set_relation('idDependencia','dependencias','dependencia');
		$crud->set_relation('idEstatus','estatus','descripcion');
		$crud->set_relation('idDireccion','direcciones','Calle:{calle} \n #:{noExt} # Int:{noInt} Col:{colonia}, \n{localidad}, CP:{cp} ');
		$crud->set_relation('idAsunto','asuntos','descripcion');
		$crud->display_as('idCiudadano','Ciudadano');
		$crud->display_as('idDireccion','Dirección');
		$crud->display_as('idRecepcion','Recepción');
		$crud->display_as('idEstatus','Estatus');
		$crud->display_as('idDependencia','Dependencia');
		$crud->display_as('idAsunto','Asunto');
		$crud->columns('idCiudadano','idAsunto','idDependencia','idEstatus','idDireccion','idRecepcion');
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function editar_ciudadano($idDenuncia=null)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model(array('model_ciudadano','model_denuncias'));

		$this->form_validation->set_rules('nombre', 'Nombre', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$data['ciudadano']=$this->model_ciudadano->get_ciudadano_denuncia($idDenuncia);
			$this->load->view('template/header.php');
			$this->load->view('ciudadanos/edicion_ciudadano', $data);
			$this->load->view('template/footer.php');
		}
		 else
		 {
			 $this->model_ciudadano->update_ciudadano();
				 $this->load->view('ciudadanos/exito');
		 }

	}
}
