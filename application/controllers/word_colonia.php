<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Word_Colonia extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

  }
  function index($colonia)
  {
    $this->load->library('word');
    //our docx will have 'lanscape' paper orientation
    $section = $this->word->createSection(array('orientation' => 'landscape', 'marginTop'=>2000, 'marginBottom'=>2000));
    // Create header
    $header = $section->createHeader();

    // Add a watermark to the header
    $header->addWatermark('plantilla.png', array('marginTop'=>-35, 'marginLeft'=>-85));

    $styleTable = array('borderSize'=>6, 'borderColor'=>'000000', 'cellMargin'=>80);
    $styleFirstRow = array('valign'=>'center', 'marginTop'=>90, 'borderBottomSize'=>14, 'borderBottomColor'=>'FFFFF', 'bgColor'=>'393939');
    
    $this->load->model(array('model_denuncias'));

    $styleCell = array('jc'=>'center','valign'=>'center');
    $styleCellBTLR = array('valign'=>'center', 'textDirection'=>PHPWord_Style_Cell::TEXT_DIR_BTLR);

    // Define font style for first row
    $fontStyle = array('bold'=>true, 'align'=>'center');
    
    $colonia = urldecode($colonia);

    //Query
    $resultados = $this->model_denuncias->by_colonia($colonia);
    $colonia = "Reporte de ". utf8_decode($colonia); 
    if(empty($resultados[0]['ciudadano'])){
        $section->addText("No se encontraron registros",array("color"=>"3B0B17", "size"=>14,"bold"=>true));
    }else{
    $this->word->addTableStyle('myOwnTableStyle', $styleTable, $styleFirstRow);

    // Add table style
    $this->word->addTableStyle('myOwnTableStyle', $styleTable, $styleFirstRow , $sectionStyle);
    $section->addText(" ",array("size"=>12,"bold"=>true));
    $section->addText("Reporte Generado",array("color"=>"3B0B17", "size"=>14,"bold"=>true));
    $section->addText($colonia, array("size"=>10,"bold"=>true));

    // Add tabke
    $table = $section->addTable('myOwnTableStyle');

    //Add row
    $table->addRow(90);

    $table->addCell(2000, $styleCell)->addText('Fecha', $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Ciudadano', $fontStyle);
    $table->addCell(2000, $styleCell)->addText(utf8_decode('Teléfono'), $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Dependencia', $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Estatus', $fontStyle);
    $table->addCell(2000, $styleCell)->addText(utf8_decode('Recepción'), $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Medio', $fontStyle);
    $table->addCell(500, $styleCell)->addText('Asunto', $fontStyle);
    $table->addCell(500, $styleCell)->addText(utf8_decode('Dirección'), $fontStyle);

    foreach ($resultados as $resultado) {
      $table->addRow();
    	$table->addCell(2000)->addText("".utf8_decode($resultado['fecha']));
      $table->addCell(2000)->addText("".utf8_decode($resultado['ciudadano']));
      $table->addCell(2000)->addText("".utf8_decode($resultado['telefono']));
    	$table->addCell(2000)->addText("".utf8_decode($resultado['dependencia']));
    	$table->addCell(2000)->addText("".utf8_decode($resultado['estatus']));
    	$table->addCell(2000)->addText("".utf8_decode($resultado['recepcion']));
        $table->addCell(2000)->addText("".utf8_decode($resultado['medios']));
      $table->addCell(2000)->addText("".utf8_decode($resultado['asunto']));
      $table->addCell(2000)->addText("".utf8_decode($resultado['direccion']));
    }
}
    $filename = "DenunciasPorColonia.docx";
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    header('Cache-Control: max-age=0'); //no cache

    // Save File
    $objWriter = PHPWord_IOFactory::createWriter($this->word, 'Word2007');
    $objWriter->save('php://output');
  }

}
