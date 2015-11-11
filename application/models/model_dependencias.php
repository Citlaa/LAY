<?php

class Model_dependencias extends CI_Model
{
	public function add_dependencia()
	{
		$data = array(
			'dependencia' => $this->input->post('dependencia'),			
			'titular' => $this->input->post('titular'),
			'calle' => $this->input->post('calle'),
			'numExt' => $this->input->post('numExt'),
			'numInt' => $this->input->post('numInt'),
			'colonia' => $this->input->post('colonia'),
			'localidad' => $this->input->post('localidad'),
			'cp' => $this->input->post('cp'),
			'tel1' => $this->input->post('tel1'),
			'tel2' => $this->input->post('tel2')
			
			);

		$q= $this->db->insert('dependencias',$data);

		if($q)
		{
			return true;
		}else{
			return false;
		}

	}

	public function show_all()
	{
		$query= $this->db->get('dependencias');

		if($query->num_rows()>0)
		{
			return $query;
		}else{
			return false;
		}
	}

	public function eliminar($id){

		$this->db->where('idDependencia',$id);
		$this->db->delete('dependencias');

	}

	public function obtenerId($id)
	{
		$this->db->where('idDependencia',$id);
		$query= $this->db->get('dependencias');
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;	
		}
	}

	public function editar_dependencia($id, $data)
	{
		$this->db->where('idDependencia',$id);
		$this->db->update('dependencias',$data);
	}

	
}