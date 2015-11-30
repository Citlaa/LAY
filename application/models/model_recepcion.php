
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_recepcion extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }

  public function get_all()
  {
    $query=$this->db->get('recepcion');
    return $query->result_array();
  }

  public function order_recepcion($idRecepcion)
  {
    $this->db->select('CONCAT(c.nombre, " ", c.apellidoPa, " ", c.apellidoMa) as nombre, colonia, d.fecha, e.descripcion, r.descripcion, a.descripcion, de.dependencia', FALSE);
    $this->db->from('ciudadanos c, denuncias d, dependencias de, estatus e, recepcion r, asuntos a');
    $this->db->where('d.idCiudadano = c.idCiudadano');
    $this->db->where('d.idDependencia = de.idDependencia');
    $this->db->where('d.idEstatus = e.idEstatus');
    $this->db->where('d.idRecepcion = r.idRecepcion');
    $this->db->where('d.idEstatus = e.idEstatus');
    $this->db->where('d.idAsunto = a.idAsunto');
    $this->db->where('d.idRecepcion', $idRecepcion);

    $direccion= $this->db->get();
    return $direccion->result_array();
  }
}
