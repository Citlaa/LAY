<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

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
		redirect('/reportes/mostrar_reportes');
	}

		function _example_output($output = null)
 
    {
        $this->load->view('our_template.php',$output);    
    }

    	public function mostrar_reportes()
	{
	
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('LAY/reportes');
		$this->load->view('template/footer');

	}

    public function mostrar_reportes2()
	{
		$grocery = new grocery_CRUD();

		 $grocery->set_theme('bootstrap');
		 $grocery->set_table('denuncias');
		 $grocery->set_language('spanish');
		 $grocery->set_relation('idEstatus','estaus','descripcion');
		 $grocery->set_relation('idRecepcion','recepcion','descripcion');
		 $grocery->set_relation('idDependencia','dependencias','dependencia');
		 $grocery->set_relation('idCiudadano','ciudadanos','nombre');
		 $grocery->set_relation('idDireccion','direcciones','colonia');
		 $grocery->set_relation('idAsunto','asuntos','descripcion');
		 $grocery->display_as('idDependencia','Dependencia');
		 $grocery->display_as('idCiudadano','Ciudadano');
		 $grocery->display_as('idDireccion','Direccion');
		 $grocery->display_as('idAsunto','Asunto');	
		 $grocery->field_type('idDependencia', 'text');
		 $grocery->field_type('idAsunto', 'text');
		 $grocery->columns('idCiudadano','idDependencia','idDireccion','fecha','idEstatus');
		 
		 $grocery->unset_edit();
		 $grocery->unset_add();
		 $grocery->unset_read();
		 $grocery->unset_delete();
		 

		 $grocery->fields('fecha','idDependencia','idEstatus','idRecepcion','idCiudadano','idDireccion','idAsunto');
		 $output = $grocery->render();
		  $this->_example_output($output);
	}



}