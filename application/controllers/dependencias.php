<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dependencias extends CI_Controller {

	function __construct(){
		parent::__construct();
		 $this->load->database();
        $this->load->helper('url');
        /* ------------------ */

        $this->load->library('grocery_CRUD');
	}

	public function index()
	{

		redirect('/dependencias/show_dependencias2');
	}

	function _example_output($output = null)

    {
        $this->load->view('our_template.php',$output);
    }

    public function show_dependencias2()
	{
		$grocery = new grocery_CRUD();

		 $grocery->set_theme('bootstrap');
		 $grocery->set_table('dependencias');
		 $grocery->set_language('spanish');
		 $grocery->display_as('numExt','No. Exterior');
		 $grocery->display_as('numInt','No. Interior');
		 $grocery->display_as('cp','C.P');
		 $grocery->display_as('tel1','Teléfono 1');
		 $grocery->display_as('tel2','Teléfono 2');
		 $grocery->display_as('comNombre','Comunicación: Nombre');
		 $grocery->display_as('comMail','Comunicación: Correo');
		 $grocery->display_as('comTel','Comunicación: Teléfono');

		 $grocery->field_type('numExt','integer');
		 $grocery->field_type('tel1','integer');
		 $grocery->field_type('tel2','integer');
		 $grocery->field_type('nombre','string');


		 $grocery->required_fields('dependencia','titular','calle','numExt','cp','colonia','localidad','tel1');
		 $grocery->columns('dependencia','titular','calle','tel1');


		 $output = $grocery->render();
		 $this->_example_output($output);
	}

		public function	dependencia_autocomplete_descripcion(){
			$this->load->model(array('model_dependencias'));
			if ($this->input->get('term')) {
				$q = $this->input->get('term');
				$query = $this->model_dependencias->dependencia_autocomplete_descripcion($q);
			}
			echo json_encode($query);
		}

		public function show_dependencias()
		{
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			if ($this->tank_auth->is_logged_in()) {
			$this->load->view('template/header');
			$this->load->view('template/menu',$data);
			$this->load->view('lay/dependencias');
			$this->load->view('template/footer');
			 }else{
			echo "no permisos";
		}
		}

}
