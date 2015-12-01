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

    $table->addCell(2000, $styleCell)->addText('Row 1', $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Row 2', $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Row 3', $fontStyle);
    $table->addCell(2000, $styleCell)->addText('Row 4', $fontStyle);
    $table->addCell(500, $styleCellBTLR)->addText('Row 5', $fontStyle);

    // Add more rows / cells
    for($i = 1; $i <= 10; $i++) {
    	$table->addRow();
    	$table->addCell(2000)->addText("Cell $i");
    	$table->addCell(2000)->addText("Cell $i");
    	$table->addCell(2000)->addText("Cell $i");
    	$table->addCell(2000)->addText("Cell $i");

    	$text = ($i % 2 == 0) ? 'X' : '';
    	$table->addCell(500)->addText($text);
    }

    $filename = "descarga.docx";
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    header('Cache-Control: max-age=0'); //no cache

    // Save File
    $objWriter = PHPWord_IOFactory::createWriter($this->word, 'Word2007');
    $objWriter->save('php://output');

    // $filename = "descarga.docx";
    // header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
    // header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    // header('Cache-Control: max-age=0'); //no cache
    //
    // $objWriter = PHPWord_IOFactory::createWriter($this->word, 'Word2007');
    // $objWriter->save('php://output');
  }

}
