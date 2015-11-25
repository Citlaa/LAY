<?php

class Model_ciudadano extends CI_Model
{
	public function show_all()
	{
		$query= $this->db->get('ciudadanos');

		if($query->num_rows()>0)
		{
			return $query;
		}else{
			return false;
		}
	}


	public function show_ciudadano()
	{
		$this->db->select('*');
		$this->db->from('ciudadanos c');
		$query= $this->db->get('ciudadanos');

		if($query->num_rows()>0)
		{
			return $query;
		}else{
			return false;
		}
	}

	public function get_ciudadano_denuncia($idDenuncia)
	{
		$this->db->select('ciudadanos.idCiudadano, ciudadanos.nombre, ciudadanos.apellidoPa, ciudadanos.apellidoMa, ciudadanos.tel1, ciudadanos.tel2');
		$this->db->from('denuncias');
		$this->db->join('ciudadanos','denuncias.idCiudadano = ciudadanos.idCiudadano');
		$this->db->where('denuncias.idRegistro', $idDenuncia);
		$ciudadano = $this->db->get();

		return $ciudadano->result_array();
	}

	public function update_ciudadano()
	{
		$data = array(
			'nombre'=> $this->input->post('nombre'),
			'apellidoPa'=> $this->input->post('apellidoPa'),
			'apellidoMa'=> $this->input->post('apellidoMa'),
			'tel1'=> $this->input->post('tel1'),
			'tel2'=> $this->input->post('tel2'),

		);
		$this->db->where('idCiudadano', $this->input->post('idCiudadano'));
		$this->db->update('ciudadanos', $data);
	}
}
