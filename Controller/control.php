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
        //cargando datos de registro seleccionado
        $obj = new zapato();
        if(isset($_REQUEST['id'])){
            $obj = $this->MODEL->cargarID($_REQUEST['id']);
        }

        include_once 'View/save.php';
    }
    
    public function guardar(){
        $obj = new zapato();
        
        $obj->id_zapato = $_POST['txtID']; //obj id, necesario solo para actualizar

        $obj->precio = $_POST['txtPrecio'];
        $obj->color = $_POST['txtColor'];
        $obj->id_estilo = $_POST['cmbEstilo'];
        $obj->id_talla = $_POST['cmbTalla'];
        $obj->id_genero = $_POST['cmbGenero'];
        $obj->cantidad = $_POST['txtCantidad'];

        //condicionando para actualizar o registrar, segun exista un id(actualiza) sino registra
        $obj->id_zapato > 0 ? $this->MODEL->actualizar($obj) : $this->MODEL->registrar($obj);        

        header("Location: index.php");
    }

    public function eliminar(){
        $this->MODEL->delete($_REQUEST['id']);
        header("Location: index.php"); 
    } 
}

?>