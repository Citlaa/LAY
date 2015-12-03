<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Word_Ciudadanos extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

  }

  function index($idCiudadano)
  {
    $this->load->library('word');
    //our docx will have 'lanscape' paper orientation

    $section = $this->word->createSection(array('orientation' => 'landscape'));
    $header = $section->createHeader();

    // Add a watermark to the header
    $header->addWatermark('plantilla.png', array('marginTop'=>-35, 'marginLeft'=>-85));

    $sectionStyle = array('marginTop' => 600);
    $styleTable = array('borderSize'=>6, 'borderColor'=>'000000', 'cellMargin'=>80);
    $styleFirstRow = array('valign'=>'center', 'marginTop'=>90, 'borderBottomSize'=>14, 'borderBottomColor'=>'FFFFF', 'bgColor'=>'393939');
    $this->load->model(array('model_denuncias'));
    
    $section = $this->word->createSection(array('orientation' => 'landscape'));
    $header = $section->createHeader();

    // Add a watermark to the header
    $header->addWatermark('plantilla.png', array('marginTop'=>-35, 'marginLeft'=>-85));   
    
    $sectionStyle = array('marginTop' => 600);
    $styleTable = array('borderSize'=>2, 'borderColor'=>'000000', 'cellMargin'=>20);
    $styleFirstRow = array('jc'=>'center', 'width'=>10, 'bgColor'=>'393939');

    // Define cell style arrays
    $styleCell = array('jc'=>'center','valign'=>'center');
    $styleCellBTLR = array('valign'=>'center', 'textDirection'=>PHPWord_Style_Cell::TEXT_DIR_BTLR);

    // Define font style for first row
    $fontStyle = array('bold'=>true, 'align'=>'center');

    // Query
    $resultados = $this->model_denuncias->by_ciudadano($idCiudadano);
    $ciudadano = "Reporte de ". $resultados[0]['ciudadano']; 


    // Add table style
    $this->word->addTableStyle('myOwnTableStyle', $styleTable, $styleFirstRow , $sectionStyle);
    $section->addText(" ",array("size"=>12,"bold"=>true));// Add table
    $section->addText("Reporte Generado",array("color"=>"3B0B17", "size"=>14,"bold"=>true));
    $section->addText($ciudadano, array("size"=>10,"bold"=>true));// Add table
    $table = $section->addTable('myOwnTableStyle', $sectionStyle);

    // Add row
    $table->addRow(900);

    $table->addCell(200, $styleCell)->addText('Fecha', $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Ciudadano', $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Dependencia', $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Estatus', $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Recepcion', $fontStyle);
    $table->addCell(500, $styleCell)->addText('Asunto', $fontStyle);
    $table->addCell(500, $styleCell)->addText('Direccion', $fontStyle);

<<<<<<< Updated upstream
    $this->load->model(array('model_ciudadano'));

    $resultados = $this->model_ciudadano->order_ciudadano($idCiudadano);

=======
>>>>>>> Stashed changes
    foreach ($resultados as $resultado) {
      $table->addRow();
    	$table->addCell(2000)->addText("".$resultado['fecha']);
      $table->addCell(2000)->addText("".$resultado['ciudadano']);
    	$table->addCell(2000)->addText("".$resultado['dependencia']);
    	$table->addCell(2000)->addText("".$resultado['estatus']);
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
