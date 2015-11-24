<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_denuncias extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }

  public function insert_denuncia()
  {
    $ciudadano = array(
      'nombre' => $this->input->post('nombre'),
      'apellidoPa' => $this->input->post('apellidoPa'),
      'apellidoMa' => $this->input->post('apellidoMa'),
      'tel1' => $this->input->post('tel1'),
      'tel2' => $this->input->post('nombre')
    );
    $direccion = array(
      'calle' => $this->input->post('calle'),
      'noExt' => $this->input->post('noExt'),
      'noInt' => $this->input->post('noInt'),
      'colonia' => $this->input->post('colonia'),
      'localidad' => $this->input->post('localidad'),
      'cp' => $this->input->post('cp'),
    );

    $asunto = array(
      'descripcion' => $this->input->post('asunto'),
    );



    $this->db->trans_start();
    $this->db->insert('ciudadanos', $ciudadano);
    $cId=$this->db->insert_id();
    $this->db->insert('direcciones', $direccion);
    $dId=$this->db->insert_id();
    $this->db->insert('asuntos', $asunto);
    $aId=$this->db->insert_id();
    $estatus  = $this->db->get_where('estatus','descripcion','Pendiente');
    $estatusPendiente = $estatus->result();
    $this->db->insert('denuncias', array(
      'fecha'=>date("Y-m-d"),
      'idDependencia'=>$dId,
      'idEstatus'=>$this->input->post('idEstatus'),
      'idRecepcion'=>$this->input->post('idRecepcion'),
      'idDependencia'=>$this->input->post('idDependencia'),
      'idDireccion'=>$dId,
      'idCiudadano'=>$cId,
      'idAsunto'=>$aId
    ));
    return $this->db->trans_complete();
  }

}
