<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Exportar_Word extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

  }

  function index()
  {
    $this->load->library('word');
    //our docx will have 'lanscape' paper orientation
    $section = $this->word->createSection();
    // Create header
    $header = $section->createHeader();

    // Add a watermark to the header
    $header->addWatermark('plantilla.png', array('marginTop'=>-35, 'marginLeft'=>-85));

    $filename = "descarga.docx";
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    header('Cache-Control: max-age=0'); //no cache

    $objWriter = PHPWord_IOFactory::createWriter($this->word, 'Word2007');
    $objWriter->save('php://output');
  }

  public function template()
  {
    $this->load->library('word');
    $document = new PHPWord_Template(APPPATH.'assets\word_template\prueba.docx');
    // $document = $this->word->loadTemplate(APPPATH.'assets\word_template\prueba.docx');
    var_dump($document);exit;
    $document->setValue('ciudadano', 'José Cardona Figueroa');
     $filename='just_some_random_name.docx'; //save our document as this file name
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    header('Cache-Control: max-age=0');
  }

}
