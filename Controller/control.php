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

    public function nuevo(){
        include_once 'View/save.php';
    }
    
    public function guardar(){
        $obj = new zapato();
        $obj->precio = $_POST['txtPrecio'];
        $obj->color = $_POST['txtColor'];
        $obj->id_estilo = $_POST['cmbEstilo'];
        $obj->id_talla = $_POST['cmbTalla'];
        $obj->id_genero = $_POST['cmbGenero'];
        $obj->cantidad = $_POST['txtCantidad'];

        $this->MODEL->registrar($obj);

        header("Location: index.php");
    }
}

?>