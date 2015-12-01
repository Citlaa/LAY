<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."/third_party/PHPWord.php";
require_once APPPATH."/third_party/PHPWord/Template.php";
class Word extends PHPWord {
    public function __construct() {
        parent::__construct();
    }
}
