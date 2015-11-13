<?php

class Model_regiden extends CI_Model
{
	public function ver_dependencias()
	{

		$query= $this->db->get('dependencias');

		if($query->num_rows()>0)
		{
			return $query;
		}else{
			return false;
		}

	}

	public function add_denuncia()
	{
		//Dirección
		//Ciudadano
		//Asunto
		$dataCiudadano = array(
			'nombre' => $this->input->post('nombre'),
			'apellidoPa' => $this->input->post('apellidoPa'),
			'apellidoMa' => $this->input->post('apellidoMa'),
			'tel1' => $this->input->post('tel1'),
			'tel2' => $this->input->post('tel2'),
		);

		$dataDireccion = array(
			'calle' => $this->input->post('calle'),
			'numExt' => $this->input->post('numExt'),
			'numInt' => $this->input->post('numInt'),
			'colonia' => $this->input->post('colonia'),
			'cp' => $this->input->post('cp'),
			'localidad' => $this->input->post('localidad'),
		);

		$dataDenuncias = array(
			'fecha' => $this->input->post('fecha'),
			'idDependencia' => $this->input->post('idDependencia'),
			'estatus' => $this->input->post('estatus'),
			'recepcion' => $this->input->post('recepcion'),
			'idCiudadanos' => $this->input->post('idCiudadanos'),
			'idDireccion' => $this->input->post('idDireccion'),
			'idAsunto' => $this->input->post('idAsunto'),
			'descripcion' => $this->input->post('descripcion')
			);

		$q= $this->db->insert('dependencias',$data);

		if($q)
		{
			return true;
		}else{
			return false;
		}

	}
	
}