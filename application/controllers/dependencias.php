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
		 $grocery->display_as('cp','C.P.');
		 $grocery->display_as('tel1','Teléfono 1');
		 $grocery->display_as('tel2','Télefono 2');
		 
		 $grocery->columns('dependencia','titular','calle','tel1');

		 
		 $output = $grocery->render();
		 $this->_example_output($output);   
	}


		public function show_dependencias()
		{
			
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('lay/dependencias');
			$this->load->view('template/footer');
		}

}