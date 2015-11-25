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
		$this->db->select('ciudadanos.nombre, ciudadanos.apellidoPa, ciudadanos.apellidoMa, ciudadanos.tel1, ciudadanos.tel2');
		// $this->db->select('idCiudadano');
		$this->db->from('denuncias');
		$this->db->join('ciudadanos','denuncias.idCiudadano = ciudadanos.idCiudadano');
		$this->db->where('denuncias.idRegistro', $idDenuncia);
		$ciudadano = $this->db->get();
		
		return $ciudadano->result();
	}

}
