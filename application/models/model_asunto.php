<?php

class Model_asunto extends CI_Model
{
	

	public function get_asunto_denuncia($idDenuncia)
	{
		$this->db->select('asuntos.idAsunto, asuntos.descripcion');
		$this->db->from('asuntos');
		$this->db->join('denuncias','denuncias.idAsunto = asuntos.idAsunto');
		$this->db->where('denuncias.idRegistro', $idDenuncia);
		$direccion = $this->db->get();

		return $direccion->result_array();
	}



	public function update_asunto()
	{
		if($this->input->get('idAsunto')){
			$data = array(
				'descripcion'=> $this->input->get('descripcion')			
			);
			$this->db->where('idAsunto', $this->input->get('idAsunto'));
			$this->db->update('asuntos', $data);
			return true;
		}else{
			return false;
		}
	}
}
