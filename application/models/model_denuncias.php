<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_denuncias extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }

  public function get_denuncia($idDenuncia)
  {
    $this->db->where('idDenuncia', $idDenuncia);
    return $this->db->get('denuncias', $idDenuncia);

  }

  public function insert_denuncia()
  {
    $ciudadano = array(
      'nombre' => $this->input->post('nombre'),
      'apellidoPa' => $this->input->post('apellidoPa'),
      'apellidoMa' => $this->input->post('apellidoMa'),
      'tel1' => $this->input->post('tel1'),
      'tel2' => $this->input->post('tel1')
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


  public function agregar_denuncia()
  {

      $ciudadano = array(
          'nombre' => $this->input->get('nombre'),
          'apellidoPa' => $this->input->get('apellidoPa'),
          'apellidoMa' => $this->input->get('apellidoMa'),
          'tel1' => $this->input->get('tel1'),
          'tel2' => $this->input->get('tel1')
        );

      $direccion = array(
        'calle' => $this->input->get('calle'),
        'noExt' => $this->input->get('noExt'),
        'noInt' => $this->input->get('noInt'),
        'colonia' => $this->input->get('colonia'),
        'localidad' => $this->input->get('localidad'),
        'cp' => $this->input->get('cp'),
      );

      $asunto = array(
        'descripcion' => $this->input->get('asunto'),
      );
      $idCiudadano = $this->input->post('idCiudadano');
      $this->db->trans_start();
      if ($idCiudadano){
        $this->db->where('idCiudadano', $idCiudadano);
        $this->db->update('ciudadanos',$ciudadano);
      } else {
        $this->db->insert('ciudadanos', $ciudadano); 
      }
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
        'idEstatus'=>$this->input->get('idEstatus'),
        'idRecepcion'=>$this->input->get('idRecepcion'),
        'idDependencia'=>$this->input->get('idDependencia'),
        'idDireccion'=>$dId,
        'idCiudadano'=>$cId,
        'idAsunto'=>$aId
      ));
      return $this->db->trans_complete();
    }
}
