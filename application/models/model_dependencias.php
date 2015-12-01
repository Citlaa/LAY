<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dependencias extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }
  public function get_all(){
    $query=$this->db->get('dependencias');
    return $query->result_array();
  }

  public function dependencia_autocomplete_descripcion($q)
	{
		$this->db->or_like('dependencia', $q);
	  $query = $this->db->get('dependencias');
		$dependencias =  $query->result_array();
		$resultados=array();
		foreach ($dependencias as $dependencia) {
			 array_push($resultados,array(
				'label'=>$dependencia['dependencia'],
				'id'=>$dependencia['idDependencia'],
				'value'=>$dependencia['dependencia']
			));
    }
    return $resultados;
		}
}
