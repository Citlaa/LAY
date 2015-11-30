<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
        $this->load->helper('url');
        $this->load->helper('date');
        /* ------------------ */ 
 		// $this->load->library('word');
        $this->load->library('grocery_CRUD');
	}

	public function index()
	{
		redirect('/reportes/mostrar_reportes');
	}

	public function show_periodo2(){
		$data1['user_id']	= $this->tank_auth->get_user_id();
		$data1['username']	= $this->tank_auth->get_username();	
		if ($this->tank_auth->is_logged_in()) {
			$data['inicio'] = $this->input->get('date1');
			$data['fin'] = $this->input->get('date2');
			$this->load->view('template/header');
			$this->load->view('template/menu',$data1);
			$this->load->view('LAY/periodo2', $data);
			$this->load->view('template/footer');
		}else{
			echo "no permisos";
		}
	}
		function _example_output($output = null)
 
    {
        $this->load->view('our_template.php',$output);
    }

    	public function mostrar_reportes()
	{
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();	
		if ($this->tank_auth->is_logged_in()) {
		$this->load->view('template/header');
		$this->load->view('template/menu',$data);
		$this->load->view('LAY/reportes');
		$this->load->view('template/footer');
		}else{
			echo "usted no tiene permisos";
		}

	}
	
    public function mostrar_reportes2()
	{
		$grocery = new grocery_CRUD();

		 $grocery->set_theme('bootstrap');
		 $grocery->set_table('denuncias');
		 $grocery->set_language('spanish');
		// $grocery->add_action('Periodo','','reportes/periodo');
		 $grocery->set_relation('idEstatus','estatus','descripcion');
		 $grocery->set_relation('idRecepcion','recepcion','descripcion');
		 $grocery->set_relation('idDependencia','dependencias','dependencia');		 
		 $grocery->set_relation('idCiudadano','ciudadanos','{nombre} \n{apellidoPa} \n{apellidoMa}');
		 $grocery->set_relation('idDireccion','direcciones','colonia');
		 $grocery->set_relation('idAsunto','asuntos','descripcion');
		 
		 $grocery->display_as('idDependencia','Dependencia');
		 $grocery->display_as('idCiudadano','Ciudadano');
		 $grocery->display_as('idDireccion','Direccion');
		 $grocery->display_as('idAsunto','Asunto');	
		 $grocery->display_as('idEstatus','Estatus');
		 $grocery->display_as('idRecepcion','Modo de recepción');

		 $grocery->field_type('idDependencia', 'text');
		 $grocery->field_type('idAsunto', 'text');
		 $grocery->columns('idCiudadano','idDependencia','idDireccion','fecha','idEstatus','idRecepcion','idAsunto');
		 
		 
		 
		 $grocery->unset_edit();
		 $grocery->unset_add();
		 $grocery->unset_read();
		 $grocery->unset_delete();
		// $grocery->unset_export();
		 $grocery->unset_print();

		 $grocery->fields('fecha','idDependencia','idEstatus','idRecepcion','idCiudadano','idDireccion','idAsunto');
		 $output = $grocery->render();
		 $this->_example_output($output);
	}

	public function periodo(){

		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();	
		
		if ($this->tank_auth->is_logged_in()) {
		$this->load->view('template/header');
		$this->load->view('template/menu',$data);
		$this->load->view('LAY/periodo');
		$this->load->view('template/footer');
		}else{
			echo "usted no tiene permisos";
		}

	}

	public function mostrar_periodo()
	{
	
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('LAY/reportes2');	
		$this->load->view('template/footer');
	}

	

	public function periodo2()
	{
		$date1 = $this->input->get('date1');
		$date2 = $this->input->get('date2');
		// var_dump($date1);
		// var_dump($date2); exit;
		$grocery = new grocery_CRUD();
		$grocery->set_theme('bootstrap');
		$grocery-> where('fecha >=',$date1);
		$grocery-> where('fecha <=',$date2);
		
		
		$grocery->set_table('denuncias');
		 $grocery->set_language('spanish');

		 $grocery->set_relation('idEstatus','estatus','descripcion');
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
		 
		 $output = $grocery->render();
		 $this->_example_output($output);		
 	}
}