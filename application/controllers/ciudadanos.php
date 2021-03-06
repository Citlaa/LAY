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
		$grocery->display_as('apellidoPa','Apellido Paterno');

		$grocery->display_as('apellidoMa','Apellido Materno');
		$grocery->display_as('tel1','Teléfono 1');
		$grocery->display_as('tel2','Teléfono 2');
		$grocery->add_action('Denuncias','','ciudadanos/denuncias_por_ciudadano', 'fa fa-university');

		$grocery->field_type('tel2','integer');
		$grocery->field_type('tel1','integer');	

		$output = $grocery->render();
		$this->_example_output($output);
	}

	public function mostrar_ciudadanos()
	{
		$data1['user_id']	= $this->tank_auth->get_user_id();
			$data1['username']	= $this->tank_auth->get_username();
		if ($this->tank_auth->is_logged_in()) {
		$this->load->model('model_ciudadano');
		$data = array(
			'ciudadanos'=> $this->model_ciudadano->show_all(),
			'dump'=>0
		);

		$this->load->view('template/header');
		$this->load->view('template/menu',$data1);
		$this->load->view('LAY/ciudadanos',$data);
		$this->load->view('template/footer');
		}else{
			echo "no permisos";
		}

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
		$crud->unset_add();

		$crud->columns('idCiudadano','idAsunto','idDependencia','idEstatus','idDireccion','idRecepcion');
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function editar_ciudadano($idDenuncia=null)
	{

		$this->load->model(array('model_ciudadano'));


			$data['ciudadano']=$this->model_ciudadano->get_ciudadano_denuncia($idDenuncia);

			$this->load->view('ciudadanos/edicion_ciudadano', $data);

	}



	public function edicion_ciudadano_ajax()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model(array('model_ciudadano'));

		$this->form_validation->set_rules('nombre', 'Nombre', 'required');

		$this->form_validation->set_message('required','El campo %s es obligatorio');

		 // if ($this->form_validation->run()==FALSE)
		 // {
			// $query=error;
			// echo json_encode($query);
		 // }else{

			$query = $this->model_ciudadano->update_ciudadano();
			echo json_encode($query);
		// }
	}


	public function agregar_denuncia_ajax()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
		$this->load->model(array('model_denuncias'));

		$query = $this->model_denuncias->agregar_denuncia();
		echo json_encode($query);
	}

	public function autocomplete_ciudadanos()
	{
		$this->load->model(array('model_ciudadano'));
		if ($this->input->get('term')) {
			$q = $this->input->get('term');
			$query = $this->model_ciudadano->ciudadano_autocomplete($q);
		}
		echo json_encode($query);
	}

	public function autocomplete_ciudadanos_nombre()
	{
		$this->load->model(array('model_ciudadano'));
		if ($this->input->get('term')) {
			$q = $this->input->get('term');
			$query = $this->model_ciudadano->ciudadano_autocomplete_nombre($q);
		}
		echo json_encode($query);
	}
}
