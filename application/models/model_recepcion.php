
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
}
