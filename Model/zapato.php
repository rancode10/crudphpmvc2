<?php 

class zapato{

    public $CNX;
    public $id_zapato;
    public $precio;
    public $color;
    public $id_estilo;
    public $id_talla;
    public $id_genero;
    public $cantidad;

    public function __construct(){
        try {
            $this->CNX = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //funcion para listar
    public function listar(){
        try {
            $query = "SELECT z.id_zapato, z.precio, z.color, e.estilo, t.talla, g.genero, z.cantidad FROM dbozapato z inner join dboestilo e on z.id_estilo = e.id_estilo inner join dbotalla t on z.id_talla = t.id_talla inner join dbogenero g on z.id_genero = g.id_genero order by z.id_zapato asc";
            $stmt = $this->CNX->prepare($query);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //cargar estilo en el combo
    public function cargarEstilo(){
        try {
            $query = "SELECT * from dboestilo";
            $stmt = $this->CNX->prepare($query);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //cargar talla en el combo
    public function cargarTalla(){
        try {
            $query = "SELECT * from dbotalla";
            $stmt = $this->CNX->prepare($query);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    //cargar genero en el combo
    public function cargarGenero(){
        try {
            $query = "SELECT * from dbogenero";
            $stmt = $this->CNX->prepare($query);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //funcion para registrar
    public function registrar(zapato $data){
        try {
            $query = "insert into dbozapato (precio,color,id_estilo,id_talla,id_genero,cantidad) values (?,?,?,?,?,?)";
            $this->CNX->prepare($query)->execute(array($data->precio,$data->color,$data->id_estilo,$data->id_talla,$data->id_genero,$data->cantidad));            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //funcion para eliminar
    public function delete($id){
        try {
            $query = "delete from dbozapato where id_zapato = ?";
            $stmt = $this->CNX->prepare($query);
            $stmt->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //funcion para cargar registro seleccionado
    public function cargarID($id){
        try {
            $query = "SELECT * from dbozapato where id_zapato = ?";
            $stmt = $this->CNX->prepare($query);
            $stmt -> execute(array($id));
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //funcion para actualizar
    public function actualizar(zapato $data){
        try {
            $query = "UPDATE dbozapato set precio=?,color=?,id_estilo=?,id_talla=?,id_genero=?,cantidad=? where id_zapato = ?";
            $this->CNX->prepare($query)->execute(array($data->precio,$data->color,$data->id_estilo,$data->id_talla,$data->id_genero,$data->cantidad, $data->id_zapato ));            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>