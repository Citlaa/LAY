<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_estatus extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_all()
  {
    $query = $this->db->get('estatus');
    return $query->result_array();
  }

  public function get_pendiente()
  {
    $query = $this->db->get_where('estatus','descripcion', 'Pendiente');
    return $query->result();
  }

  public function grafica_pen()
  {
    $query = $this->db->from('denuncias')->where("idEstatus=1");
    
    return $this->db->count_all_results();
  }

  public function grafica_aten()
  {
    $query = $this->db->from('denuncias')->where("idEstatus=2");
    
    return $this->db->count_all_results();
  }
}
