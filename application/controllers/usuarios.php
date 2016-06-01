<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	function __construct(){
		parent::__construct();
		 $this->load->database();
        $this->load->helper('url');
        /* ------------------ */

        $this->load->library('grocery_CRUD');
	}

	public function index()
	{
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();	
		if ($this->tank_auth->is_logged_in()) {
		$this->load->view('template/header');
		$this->load->view('template/menu',$data);
		$this->load->view('LAY/usuarios');
		$this->load->view('template/footer');
		  }else{
			echo "no permisos";
		}
	}


	function _example_output($output = null)

    {
        $this->load->view('our_template.php',$output);
    }


		public function mostrar_usuarios()
	{
		$grocery = new grocery_CRUD();

		 $grocery->set_theme('bootstrap');
		 $grocery->set_table('users');
		 $grocery->set_language('spanish');

		 $grocery->display_as('username','Usuario');
		 $grocery->display_as('email','E-mail');

		 $grocery->fields('username','email');
		 $grocery->unset_read();

		 $grocery->columns('username','password','email');
		 $grocery->field_type('password','password');		 

		 $grocery->unset_add();
		 $grocery->unset_export();
		 $grocery->unset_print();		 


		 $output = $grocery->render();
		 $this->_example_output($output);
	}
}
