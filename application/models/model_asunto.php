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

	public function order_asunto($idAsunto)
	{
	  $this->db->select('CONCAT(c.nombre, " ", c.apellidoPa, " ", c.apellidoMa) as nombre, colonia, d.fecha, e.descripcion, r.descripcion, a.descripcion, de.dependencia', FALSE);
	  $this->db->from('ciudadanos c, denuncias d, dependencias de, estatus e, recepcion r, asuntos a');
	  $this->db->where('d.idCiudadano = c.idCiudadano');
	  $this->db->where('d.idDependencia = de.idDependencia');
	  $this->db->where('d.idEstatus = e.idEstatus');
	  $this->db->where('d.idRecepcion = r.idRecepcion');
	  $this->db->where('d.idEstatus = e.idEstatus');
	  $this->db->where('d.idAsunto = a.idAsunto');
	  $this->db->where('d.idAsunto', $idAsunto);

	  $direccion= $this->db->get();
	  return $direccion->result_array();
	}

}
