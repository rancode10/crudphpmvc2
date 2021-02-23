<?php 

class zapato{

    public $CNX;

    public function __construct(){
        try {
            $this->CNX = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listar(){
        try {
            $query = "SELECT z.id_zapato, z.precio, z.color, e.estilo, t.talla, g.genero, z.cantidad FROM dbozapato z inner join dboestilo e on z.id_estilo = e.id_estilo inner join dbotalla t on z.id_talla = t.id_talla inner join dbogenero g on z.id_genero = g.id_genero";
            $stmt = $this->CNX->prepare($query);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>