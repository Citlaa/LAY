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

    $idCiudadano = $this->input->post('idCiudadano');
    $this->db->trans_start();
    if ($idCiudadano !='null'){
      $this->db->where('idCiudadano', $idCiudadano);
      $this->db->update('ciudadanos',$ciudadano);
      $cId=$idCiudadano;
    } else {
      $this->db->insert('ciudadanos', $ciudadano);
      $cId=$this->db->insert_id();
    }
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

    public function get_all(){
      $this->db->from('denuncias');
      $this->db->join('ciudadanos', 'denuncias.idCiudadano = ciudadanos.idCiudadano', 'left');
      $this->db->join('estatus', 'denuncias.idEstatus = estatus.idEstatus', 'left');
      $this->db->join('recepcion', 'denuncias.idRecepcion = recepcion.idRecepcion', 'left');
      $this->db->join('direcciones', 'denuncias.idDireccion = direcciones.idDireccion', 'left');
      $this->db->join('asuntos', 'denuncias.idAsunto = asuntos.idAsunto', 'left');
      $query = $this->db->get();
      return $query->result_array();
    }

    public function by_colonia($colonia)
    {
      $this->db->select('CONCAT(c.nombre, " ", c.apellidoPa, " ", c.apellidoMa) as ciudadano, CONCAT(dir.calle, " ", dir.noExt, " ", dir.noInt, " ", dir.colonia, " ", dir.localidad, " ", dir.cp) AS direccion, d.fecha, e.descripcion as estatus, r.descripcion as recepcion, a.descripcion as asunto, de.dependencia as dependencia');
      $this->db->from('ciudadanos c, denuncias d, dependencias de, estatus e, recepcion r, asuntos a, direcciones dir');
      $this->db->where('d.idCiudadano = c.idCiudadano');
      $this->db->where('d.idDependencia = de.idDependencia');
      $this->db->where('d.idEstatus = e.idEstatus');
      $this->db->where('d.idRecepcion = r.idRecepcion');
      $this->db->where('d.idDireccion = dir.idDireccion');
      $this->db->where('d.idAsunto = a.idAsunto');
      $this->db->like('dir.colonia', $colonia);

      $direccion= $this->db->get();
      return $direccion->result_array();
    }
    public function order_fecha($fecha)
    {
      $this->db->select('CONCAT(c.nombre, " ", c.apellidoPa, " ", c.apellidoMa) as ciudadano, CONCAT(dir.calle, " ", dir.noExt, " ", dir.noInt, " ", dir.colonia, " ", dir.localidad, " ", dir.cp) AS direccion, d.fecha, e.descripcion as estatus, r.descripcion as recepcion, a.descripcion as asunto, de.dependencia as dependencia');
      $this->db->from('ciudadanos c, denuncias d, dependencias de, estatus e, recepcion r, asuntos a, direcciones dir');
      $this->db->where('d.idCiudadano = c.idCiudadano');
      $this->db->where('d.idDependencia = de.idDependencia');
      $this->db->where('d.idEstatus = e.idEstatus');
      $this->db->where('d.idRecepcion = r.idRecepcion');
      $this->db->where('d.idDireccion = dir.idDireccion');
      $this->db->where('d.idAsunto = a.idAsunto');
      $this->db->where('d.fecha', $fecha);

      $direccion= $this->db->get();
      return $direccion->result_array();
    }

    public function by_estatus($idEstatus)
    {
      $this->db->select('CONCAT(c.nombre, " ", c.apellidoPa, " ", c.apellidoMa) as ciudadano, CONCAT(dir.calle, " ", dir.noExt, " ", dir.noInt, " ", dir.colonia, " ", dir.localidad, " ", dir.cp) AS direccion, d.fecha, e.descripcion AS estatus, r.descripcion AS recepcion, a.descripcion AS asunto, de.dependencia', FALSE);
      $this->db->from('ciudadanos c, denuncias d, dependencias de, estatus e, recepcion r, asuntos a, direcciones dir');
      $this->db->where('d.idCiudadano = c.idCiudadano');
      $this->db->where('d.idDependencia = de.idDependencia');
      $this->db->where('d.idEstatus = e.idEstatus');
      $this->db->where('d.idRecepcion = r.idRecepcion');
      $this->db->where('d.idEstatus = e.idEstatus');
      $this->db->where('d.idAsunto = a.idAsunto');
      $this->db->where('d.idDireccion = dir.idDireccion');
      $this->db->where('d.idEstatus', $idEstatus);

      $direccion= $this->db->get();
      return $direccion->result_array();
    }

    public function by_ciudadano($idCiudadano)
    {
      $resultados= $this->db->query(
        "SELECT d.idRegistro, d.fecha, de.dependencia, e.descripcion as estatus, CONCAT(dir.calle, ' ', dir.noExt, ' ', dir.noInt, ' ', dir.colonia, ' ', dir.localidad, ' ', dir.cp) AS direccion, r.descripcion as recepcion,  a.descripcion as asunto
        FROM `denuncias` d, dependencias de, estatus e, recepcion r, ciudadanos c, direcciones dir, asuntos a
        WHERE d.idCiudadano = c.idCiudadano
        AND d.idDependencia = de.idDependencia
        AND d.idEstatus = e.idEstatus
        AND d.idRecepcion = r.idRecepcion
        AND d.idCiudadano = dir.idDireccion
        AND d.idAsunto = a.idAsunto
        AND d.idCiudadano = $idCiudadano
        ORDER BY d.fecha ASC");

      return $resultados->result_array();
    }

    public function by_dependencia($idDependencia)
    {
      $this->db->select('CONCAT(c.nombre, " ", c.apellidoPa, " ", c.apellidoMa) as ciudadano, CONCAT(dir.calle, " ", dir.noExt, " ", dir.noInt, " ", dir.colonia, " ", dir.localidad, " ", dir.cp) AS direccion, d.fecha, e.descripcion as estatus, r.descripcion as recepcion, a.descripcion as asunto, de.dependencia as dependencia');
      $this->db->from('ciudadanos c, denuncias d, dependencias de, estatus e, recepcion r, asuntos a, direcciones dir');
      $this->db->where('d.idCiudadano = c.idCiudadano');
      $this->db->where('d.idDependencia = de.idDependencia');
      $this->db->where('d.idEstatus = e.idEstatus');
      $this->db->where('d.idRecepcion = r.idRecepcion');
      $this->db->where('d.idDireccion = dir.idDireccion');
      $this->db->where('d.idAsunto = a.idAsunto');
      $this->db->where('d.idDependencia', $idDependencia);

      $direccion= $this->db->get();
      return $direccion->result_array();
    }

    public function by_periodo($fechai, $fechaf)
    {
      $this->db->select('CONCAT(c.nombre, " ", c.apellidoPa, " ", c.apellidoMa) as ciudadano, CONCAT(dir.calle, " ", dir.noExt, " ", dir.noInt, " ", dir.colonia, " ", dir.localidad, " ", dir.cp) AS direccion, d.fecha, e.descripcion as estatus, r.descripcion as recepcion, a.descripcion as asunto, de.dependencia as dependencia');
      $this->db->from('ciudadanos c, denuncias d, dependencias de, estatus e, recepcion r, asuntos a, direcciones dir');
      $this->db->where('d.idCiudadano = c.idCiudadano');
      $this->db->where('d.idDependencia = de.idDependencia');
      $this->db->where('d.idEstatus = e.idEstatus');
      $this->db->where('d.idRecepcion = r.idRecepcion');
      $this->db->where('d.idDireccion = dir.idDireccion');
      $this->db->where('d.idAsunto = a.idAsunto');
      $this->db->where("d.fecha >= '".$fechai."'");
      $this->db->where("d.fecha <= '".$fechaf."'");

      $direccion= $this->db->get();
      return $direccion->result_array();
    }

    public function by_recepcion($idRecepcion)
    {
      $this->db->select('CONCAT(c.nombre, " ", c.apellidoPa, " ", c.apellidoMa) as ciudadano, CONCAT(dir.calle, " ", dir.noExt, " ", dir.noInt, " ", dir.colonia, " ", dir.localidad, " ", dir.cp) AS direccion, d.fecha, e.descripcion as estatus, r.descripcion as recepcion, a.descripcion as asunto, de.dependencia as dependencia');
      $this->db->from('ciudadanos c, denuncias d, dependencias de, estatus e, recepcion r, asuntos a, direcciones dir');
      $this->db->where('d.idCiudadano = c.idCiudadano');
      $this->db->where('d.idDependencia = de.idDependencia');
      $this->db->where('d.idEstatus = e.idEstatus');
      $this->db->where('d.idRecepcion = r.idRecepcion');
      $this->db->where('d.idDireccion = dir.idDireccion');
      $this->db->where('d.idAsunto = a.idAsunto');
      $this->db->where('d.idRecepcion', $idRecepcion);

      $direccion= $this->db->get();
      return $direccion->result_array();
    }
}
