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
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();	
			if ($this->tank_auth->is_logged_in()) {
			
		$this->load->view('template/header');
		$this->load->view('template/menu',$data);
		$this->load->view('LAY/buscar_denuncia');
		$this->load->view('template/footer');
		 }else{
			echo "no permisos";
		}

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
		 $grocery->display_as('idDireccion','Dirección');
		 $grocery->display_as('idRecepcion','Recepción');
		 $grocery->display_as('idEstatus','Estatus');
		 $grocery->display_as('idAsunto','Asunto');

		 $grocery->unset_add();
		 $grocery->unset_export();
		 //$grocery->unset_edit();
		 $grocery->edit_fields('fecha','idDependencia','idEstatus','idRecepcion');

		 $grocery->add_action('Editar ciudadano','','ciudadanos/editar_ciudadano');
		 $grocery->add_action('Editar Direccion','','direcciones/editar_direccion');
		 $grocery->add_action('Editar Asunto','','asuntos/editar_asunto');
		 


		 $grocery->columns('fecha','idDependencia','idCiudadano','idEstatus','idRecepcion','idDireccion','idAsunto');

		 $output = $grocery->render();
		 $this->_example_output($output);
	}

	public function add_denuncia()
	{
		$data1['user_id']	= $this->tank_auth->get_user_id();
		$data1['username']	= $this->tank_auth->get_username();	
		
		if ($this->tank_auth->is_logged_in()) {
			$this->load->model('model_recepcion');

			$data['recepcion'] = $this->model_recepcion->get_all();
			$this->load->model('model_dependencias');
			$data['dependencias'] = $this->model_dependencias->get_all();
			$this->load->model('model_estatus');
			$data['estatus'] = $this->model_estatus->get_all();
			$this->load->model('model_denuncias');
			$this->load->helper('form');
    		$this->load->library('form_validation');
			
			$this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');
			$this->form_validation->set_rules('apellidoPa', 'Apellido Paterno', 'required|trim');
			$this->form_validation->set_rules('apellidoMa', 'Apellido Materno', 'required|trim');
			//$this->form_validation->set_rules('apellidoMa', 'Apellido Materno', 'required|trim|callback_customAlpha');
			$this->form_validation->set_rules('calle', 'Calle', 'required|trim');

			$this->form_validation->set_rules('noExt', 'No. Exterior', 'required|integer|trim');
			$this->form_validation->set_rules('cp', 'C.P.', 'required|integer|trim');
			$this->form_validation->set_rules('colonia', 'Colonia', 'required|trim');
			$this->form_validation->set_rules('localidad', 'Localidad', 'required|trim');
			$this->form_validation->set_rules('tel1', 'Teléfono', 'required|integer|trim');
			$this->form_validation->set_rules('tel2', 'Teléfono', 'integer|trim');
			$this->form_validation->set_rules('asunto', 'Asunto', 'required|trim');

			$this->form_validation->set_message('alpha','El campo %s debe estar compuesto solo por letras');
			$this->form_validation->set_message('required','El campo %s es obligatorio');
			$this->form_validation->set_message('integer','El campo %s debe estar compuesto por numeros enteros');



			if ($this->form_validation->run() === FALSE)
	 		{
				$this->load->view('template/header.php');
				$this->load->view('template/menu.php',$data1);
				$this->load->view('denuncias/create_denuncia.php', $data);				
				$this->load->view('template/footer.php');
	 		}
	 		else
	 		{	
			 	$this->model_denuncias->insert_denuncia();
			 	$this->load->view('template/header.php');
				$this->load->view('template/menu.php',$data1);			
			 	$this->load->view('denuncias/exito');
			 	$this->load->view('template/footer.php');
	 		}
  		}else{

			echo "no permisos";
		}
	}

	public function customAlpha($str) 
	{
    	if ( !preg_match('/^[a-z. ,\-]+$/i',$str) )
    	{
	        return false;
	    }
	}

	public function save_denuncia()
	{
		$this->model_denuncias->insert_denuncia();
	}

	
	public function get_direccion_denuncia($idDenuncia)
	{
		$this->db->select('direcciones.idDireccion, direcciones.calle, direcciones.noExt, direcciones.noInt, direcciones.colonia, direcciones.localidad, direcciones.cp');
		$this->db->from('denuncias');
		$this->db->join('direcciones','denuncias.idDireccion = direcciones.idDireccion');
		$this->db->where('denuncias.idRegistro', $idDenuncia);
		$direccion = $this->db->get();

		return $direccion->result_array();
	}

	public function registro_exitoso(){
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('denuncias/exito');
		$this->load->view('template/footer');
	}

}
