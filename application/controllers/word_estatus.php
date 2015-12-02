<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Word_Estatus extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

  }

  function index($idEstatus)
  {
    $this->load->library('word');
    //our docx will have 'lanscape' paper orientation
    $section = $this->word->createSection();
    // Create header
    $header = $section->createHeader();

    // Add a watermark to the header
    $header->addWatermark('plantilla.png', array('marginTop'=>-35, 'marginLeft'=>-85));


    $styleTable = array('borderSize'=>6, 'borderColor'=>'006699', 'cellMargin'=>80);
    $styleFirstRow = array('borderBottomSize'=>18, 'borderBottomColor'=>'0000FF', 'bgColor'=>'66BBFF');

    // Define cell style arrays
    $styleCell = array('valign'=>'center');
    $styleCellBTLR = array('valign'=>'center', 'textDirection'=>PHPWord_Style_Cell::TEXT_DIR_BTLR);

    // Define font style for first row
    $fontStyle = array('bold'=>true, 'align'=>'center');

    // Add table style
    $this->word->addTableStyle('myOwnTableStyle', $styleTable, $styleFirstRow);

    // Add table
    $table = $section->addTable('myOwnTableStyle');

    // Add row
    $table->addRow(900);

    $table->addCell(2000, $styleCell)->addText('Fecha', $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Ciudadano', $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Dependencia', $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Recepcion', $fontStyle);
    $table->addCell(500, $styleCell)->addText('Asunto', $fontStyle);
    $table->addCell(500, $styleCell)->addText('Direccion', $fontStyle);

    $this->load->model(array('model_denuncias'));

    $resultados = $this->model_denuncias->by_estatus($idEstatus);

    foreach ($resultados as $resultado) {
      $table->addRow();
      $table->addCell(2000)->addText("".$resultado['fecha']);
      $table->addCell(2000)->addText("".$resultado['ciudadano']);
    	$table->addCell(2000)->addText("".$resultado['dependencia']);
    	$table->addCell(2000)->addText("".$resultado['recepcion']);
      $table->addCell(2000)->addText("".$resultado['asunto']);
      $table->addCell(2000)->addText("".$resultado['direccion']);
    }

    $filename = "DenunciasPorCiudadano.docx";
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    header('Cache-Control: max-age=0'); //no cache

    // Save File
    $objWriter = PHPWord_IOFactory::createWriter($this->word, 'Word2007');
    $objWriter->save('php://output');
  }

}
