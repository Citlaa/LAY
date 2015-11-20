<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regidenu extends CI_Controller {

	public function index()
	{
		redirect('/regidenu/mostrar_dependencias');
	}

	public function mostrar_dependencias()
	{
		$this->load->model('model_dependencias');
		
		$data = array(
				'dependecias'=> $this->model_dependencias->show_all(),
				'dump'=>0
				);

		$this->load->view('template/header');
		$this->load->view('LAY/registros',$data);
		$this->load->view('template/footer');



	}

	public function denuncia_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fecha','Fecha','required');
		$this->form_validation->set_rules('idDependencia','Dependencia','required');
		$this->form_validation->set_rules('estatus','Estatus','required');
		$this->form_validation->set_rules('recepcion','recepcion','required');
		$this->form_validation->set_rules('nombre','Nombre','required');
		$this->form_validation->set_rules('apellidoPa','Apelido Paterno','required');
		$this->form_validation->set_rules('apellidoMa','Apelido Materno','required');
		$this->form_validation->set_rules('calle','Calle','required');
		$this->form_validation->set_rules('noExt','Numero Exterior','required');
		$this->form_validation->set_rules('colonia','Colonia','required');
		$this->form_validation->set_rules('cp','C.P.','required');
		$this->form_validation->set_rules('localidad','Localidad','required');
		$this->form_validation->set_rules('tel1','Telefono 1','required');
		

		if($this->form_validation->run())
		{
			
			$this->load->model('model_regiden');

			if($this->model_regiden->add_denuncia())
			{
				redirect('/regidenu/');	
			}else{
				echo "registro no exitoso";
				
				redirect('/main/');
			}

		}else{
			
			//redirect('/regidenu');
			$this->load->model('model_dependencias');
		
		$data = array(
				'dependecias'=> $this->model_dependencias->show_all(),
				'dump'=>0
				);

		$this->load->view('template/header');
		$this->load->view('LAY/registros',$data);
		$this->load->view('template/footer');

		}		



	}

	public function buscar()
		{

			//redirect('/regidenu');			

		$this->load->view('template/header');
		$this->load->view('LAY/buscar_denuncia');
		$this->load->view('template/footer');

		}
	public function mostrar_busqueda()
	{
		$data=array('');
			$query = $this->input->get('query',true);
			
			$this->load->model('model_regiden');

			if($query)
			{
				$result= $this->model_regiden->buscar(trim($query));
				if($result!= false)
				{
					$data = array ('result'=>$result);
				}else{
					$data = array ('result'=> '');
				}
			}

		$this->load->view('template/header');
		$this->load->view('LAY/mostrar_denuncia',$data);
		$this->load->view('template/footer');
	}
}
		