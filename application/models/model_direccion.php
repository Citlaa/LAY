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
		$data = array(
			'calle'=> $this->input->post('calle'),
			'noExt'=> $this->input->post('noExt'),
			'noInt'=> $this->input->post('noInt'),
			'colonia'=> $this->input->post('colonia'),
			'localidad'=> $this->input->post('localidad'),
			'cp'=> $this->input->post('cp')
		);
		$this->db->where('idDireccion', $this->input->post('idDireccion'));
		$this->db->update('direcciones', $data);
	}
}
