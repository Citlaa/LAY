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
	public function order_direccion($idDDireccion)
  {
    $this->db->select('CONCAT(c.nombre, " ", c.apellidoPa, " ", c.apellidoMa) as nombre, colonia, d.fecha, e.descripcion, r.descripcion, a.descripcion, de.dependencia', FALSE);
    $this->db->from('ciudadanos c, denuncias d, dependencias de, estatus e, recepcion r, asuntos a');
    $this->db->where('d.idCiudadano = c.idCiudadano');
    $this->db->where('d.idDependencia = de.idDependencia');
    $this->db->where('d.idEstatus = e.idEstatus');
    $this->db->where('d.idRecepcion = r.idRecepcion');
    $this->db->where('d.idEstatus = e.idEstatus');
    $this->db->where('d.idAsunto = a.idAsunto');
    $this->db->where('de.idDireccion', $idDireccion);

    $direccion= $this->db->get();
    return $direccion->result_array();
  }
	public function direccion_autocomplete_colonia($q)
	{
		$this->db->or_like('colonia', $q);
	  $query = $this->db->get('direcciones');
		$colonias =  $query->result_array();
		$resultados=array();
		foreach ($colonias as $colonia) {
			 array_push($resultados,array(
				'label'=>$colonia['colonia'],
				'id'=>$colonia['idDireccion'],
				'value'=>$colonia['colonia']
			));
    }
    return $resultados;
		}
}
