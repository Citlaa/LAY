<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dependencias extends CI_Controller {

	public function index()
	{
		
		redirect('/dependencias/show_dependencias');
	}


	public function dependencia_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('dependencia','Dependencia','required|is_unique[dependencias.dependencia]');
		$this->form_validation->set_rules('titular','Titular','required');
		$this->form_validation->set_rules('calle','Calle','required');
		$this->form_validation->set_rules('numExt','Numero Exterior','required');
		$this->form_validation->set_rules('colonia','Colonia','required');
		$this->form_validation->set_rules('cp','C.P.','required');
		$this->form_validation->set_rules('localidad','Localidad','required');
		$this->form_validation->set_rules('tel1','Telefono 1','required');

		$this->form_validation->set_message('is_unique',"Esa dependencia ya existe");

		if($this->form_validation->run())
		{
			
			$this->load->model('model_dependencias');

			if($this->model_dependencias->add_dependencia())
			{
				redirect('/dependencias/');	
			}else{
				echo "registro no exitoso";
				
				redirect('/dependencias/');
			}

		}else{
			$this->load->view('template/header');
		$this->load->view('LAY/dependencias');
		$this->load->view('template/footer');
		}

	
	}

	public function dependencia_edit_validation()
	{
		$this->load->model('model_dependencias');
		$id = $this->uri->segment(3);

		$data = array (
			'dependencia' => $this->input->post('dependencia',true),			
			'titular' => $this->input->post('titular',true),
			'calle' => $this->input->post('calle',true),
			'numExt' => $this->input->post('numExt',true),
			'numInt' => $this->input->post('numInt',true),
			'colonia' => $this->input->post('colonia',true),
			'localidad' => $this->input->post('localidad',true),
			'cp' => $this->input->post('cp',true),
			'tel1' => $this->input->post('tel1',true),
			'tel2' => $this->input->post('tel2',true)
			);

		$this->model_dependencias->editar_dependencia($id, $data);

		redirect('/dependencias/');

	}

		public function show_dependencias()
		{
			$this->load->model('model_dependencias');
			$data = array(
				'dependecias'=> $this->model_dependencias->show_all(),
				'dump'=>0
				);
			$this->load->view('template/header');
			$this->load->view('LAY/dependencias',$data);
			$this->load->view('template/footer');

		}


		public function delete_dependencia(){
			$this->load->model('model_dependencias');

			$id = $this->uri->segment(3);

			$this->model_dependencias->eliminar($id);

			redirect('/dependencias/show_dependencias');

		}

		public function edit_dependencia(){
			$this->load->model('model_dependencias');
			
			$id = $this->uri->segment(3);
			$obtener= $this->model_dependencias->obtenerId($id);

			if($obtener != FALSE)
			{
				foreach ($obtener-> result() as $row) {
					$dependencia = $row->dependencia;
					$titular = $row->titular;
					$calle = $row->calle;
					$numExt = $row->numExt;
					$numInt = $row->numInt;
					$colonia = $row->colonia;
					$localidad = $row->localidad;
					$cp = $row->cp;
					$tel1 = $row->tel1;
					$tel2 = $row->tel2;
				}
				
				$data= array (
					'idDependcia' => $id,
					'dependencia'=> $dependencia,
					'titular' => $titular,
					'calle' => $calle,
					'numExt' => $numExt,
					'numInt' => $numInt,
					'colonia' => $colonia,
					'localidad' => $localidad,
					'cp' => $cp,
					'tel1' => $tel1,
					'tel2' => $tel2

					);
			}else{
				$data ='';
				return FALSE;
			}


			$this->load->view('template/header');
			$this->load->view('LAY/dependencias_editar',$data);
			$this->load->view('template/footer');

		}

		public function dependencias2()
		{
			$this->load->view('template/header');
			$this->load->view('LAY/dependencias2');
			$this->load->view('template/footer');
		}



}