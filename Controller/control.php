<?php 
include_once 'Model/zapato.php';
class control{

    public $MODEL;

    public function __construct(){
        $this->MODEL = new zapato();
    }
    
    public function index(){
        include_once 'View/home.php';
    }

    
}

?>