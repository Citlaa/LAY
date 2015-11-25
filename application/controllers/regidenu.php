<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regidenu extends CI_Controller {
	function __construct(){
		parent::__construct();
		 $this->load->database();
        $this->load->helper('url');
        /* ------------------ */

        $this->load->library('grocery_CRUD');
	}

	public function index()
	{
		redirect('/regidenu/mostrar_dependencias');
	}
	public function buscar()
		{

			//redirect('/regidenu');

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('LAY/buscar_denuncia');
		$this->load->view('template/footer');

		}
		function _example_output($output = null)

    {
        $this->load->view('our_template.php',$output);
    }
	public function mostrar_busqueda()
	{
		$grocery = new grocery_CRUD();

		 $grocery->set_theme('bootstrap');
		 $grocery->set_table('denuncias');
		 $grocery->set_language('spanish');
		 $grocery->set_relation('idEstatus','estatus','descripcion');
		 $grocery->set_relation('idRecepcion','recepcion','descripcion');
		 $grocery->set_relation('idDependencia','dependencias','dependencia');
		 $grocery->set_relation('idCiudadano','ciudadanos','{nombre} \n{apellidoPa} \n{apellidoMa}');
		 $grocery->set_relation('idDireccion','direcciones','colonia');
		 $grocery->set_relation('idAsunto','asuntos','descripcion');

		 $grocery->display_as('idDependencia','Dependencia');
		 $grocery->display_as('idCiudadano','Ciudadano');
		 $grocery->display_as('idDireccion','Direccion');
		 $grocery->display_as('idRecepcion','Recepcion');
		 $grocery->display_as('idEstatus','Estatus');
		 $grocery->display_as('idAsunto','Asunto');

		 $grocery->unset_add();
		 $grocery->unset_edit();

		 $grocery->add_action('Editar ciudadano','','ciudadanos/editar_ciudadano');
		 $grocery->add_action('Exportar PDF','','ciudadanos/editar_ciudadano');


		 $grocery->columns('fecha','idDependencia','idCiudadano','idEstatus','idRecepcion','idDireccion','idAsunto');

		 $output = $grocery->render();
		 $this->_example_output($output);
	}

	public function add_denuncia()
	{
		$this->load->model('model_recepcion');
		$data['recepcion'] = $this->model_recepcion->get_all();
		$this->load->model('model_dependencias');
		$data['dependencias'] = $this->model_dependencias->get_all();
		$this->load->model('model_estatus');
		$data['estatus'] = $this->model_estatus->get_all();
		$this->load->model('model_denuncias');
		$this->load->helper('form');
    $this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		if ($this->form_validation->run() == FALSE)
	 {
			$this->load->view('template/header.php');
			 $this->load->view('template/menu.php');
			$this->load->view('denuncias/create_denuncia.php', $data);
			$this->load->view('template/footer.php');
	 }
	 else
	 {
			 $this->model_denuncias->insert_denuncia();
			 $this->load->view('denuncias/exito');
	 }

	}

	public function save_denuncia()
	{
		$this->model_denuncias->insert_denuncia();
	}
}
