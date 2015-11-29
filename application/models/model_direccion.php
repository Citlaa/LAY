<?php

class Model_direccion extends CI_Model
{
	

	public function get_direccion_denuncia($idDenuncia)
	{
		$this->db->select('direcciones.idDireccion, direcciones.calle, direcciones.noExt, direcciones.noInt, direcciones.colonia, direcciones.localidad, direcciones.cp');
		$this->db->from('denuncias');
		$this->db->join('direcciones','denuncias.idDireccion = direcciones.idDireccion');
		$this->db->where('denuncias.idRegistro', $idDenuncia);
		$direccion = $this->db->get();

		return $direccion->result_array();
	}

	public function update_direccion()
	{
		if ($this->input->get('idDireccion')) {
			$data = array(
				'calle'=> $this->input->get('calle'),
				'noExt'=> $this->input->get('noExt'),
				'noInt'=> $this->input->get('noInt'),
				'colonia'=> $this->input->get('colonia'),
				'localidad'=> $this->input->get('localidad'),
				'cp'=> $this->input->get('cp')
			);
		$this->db->where('idDireccion', $this->input->get('idDireccion'));
		$this->db->update('direcciones', $data);
		return true;
		}else {
			return false;
		}
	}
}
