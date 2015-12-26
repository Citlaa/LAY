<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_medios extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_all()
  {
    $query = $this->db->get('medios');
    return $query->result_array();
  }
  
}
