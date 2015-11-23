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
		 $grocery->columns('idCiudadano','idDependencia','idDireccion');
		 //$grocery->columns()

		 $grocery->fields('fecha','idDependencia','idEstatus','idRecepcion','idCiudadano','idDireccion','idAsunto');
		 $output = $grocery->render();
		  $this->_example_output($output);
	}

	public function _callback_webpage_url($value, $row)
{
  return "<a href='".site_url('admin/sub_webpages/'.$row->id)."'>$value</a>";
}
}
		