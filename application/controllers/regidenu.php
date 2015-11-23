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
		 $grocery->set_subject('Denuncias');
		 $grocery->set_relation('idEstatus','estaus','descripcion');
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

		 $grocery->columns('fecha','idDependencia','idCiudadano','idEstatus','idRecepcion','idDireccion','idAsunto');

		 $output = $grocery->render();
		 $this->_example_output($output);
	}

	public function add_denuncia()
	{
		
	}

	public function save_denuncia()
	{
		$this->model_denuncias->insert_denuncia();
	}
}
