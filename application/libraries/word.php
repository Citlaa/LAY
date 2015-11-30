<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."/third_party/PHPWord.php";
/**
 * Word library
 */
class Word extends PHPWord
{

  function __construct()
  {
    parent::__construct();
  }
}
