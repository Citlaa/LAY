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
		if ($this->input->get('idCiudadano')) {

			$data = array(
				'nombre'=> $this->input->get('nombre'),
				'apellidoPa'=> $this->input->get('apellidoPa'),
				'apellidoMa'=> $this->input->get('apellidoMa'),
				'tel1'=> $this->input->get('tel1'),
				'tel2'=> $this->input->get('tel2'),
			);

			$this->db->where('idCiudadano', $this->input->get('idCiudadano'));
			$this->db->update('ciudadanos', $data);
			return true;
		} else {
			return false;
		}

	}

	public function ciudadano_autocomplete($q)
	{
		$this->db->or_like('nombre', $q);
		$this->db->or_like('apellidoPa', $q);
		$this->db->or_like('apellidoMa', $q);
		$query = $this->db->get('ciudadanos');
		$ciudadanos =  $query->result_array();
		$resultados=array();
		foreach ($ciudadanos as $ciudadano) {
			 array_push($resultados,array(
				'label'=>$ciudadano['nombre'].' '.$ciudadano['apellidoPa'].' '.$ciudadano['apellidoMa'],
				'id'=>$ciudadano['idCiudadano'],
				'value'=>$ciudadano['nombre'],
				'apellidoPa'=>$ciudadano['apellidoPa'],
				'apellidoMa'=>$ciudadano['apellidoMa'],
				'tel1'=>$ciudadano['tel1'],
				'tel2'=>$ciudadano['tel2']
			));
		}

		return $resultados;
	}
}
