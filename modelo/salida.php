<?php

class Salida{
    private $idSalida;
    private $producto;
    private $cantidad;
    private $fecha;
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=Almacen','root','');       
    }

    #>Getters Y Setters
    function getIdSalida(){
        return $this->idSalida;
    }

    function setIdSalida($id){
        $this->idSalida = $id;
    }

    function getproducto(){
        return $this->producto;
    }

    function setproducto($producto){
        $this->producto = $producto;
    }

    function getcantidad(){
        return $this->cantidad;
    }

    function setcantidad($cantidad){
        $this->cantidad = $cantidad;
    }

    function getFecha(){
        return $this->fecha;
    }

    function setFecha($fecha){
        $this->fecha = $fecha;
    }

    function addSalida($producto, $cantidad, $fecha){
        try{
            $this->db->beginTransaction();
            $sql = $this->db->prepare('INSERT INTO salidas(producto,cantidad,fecha) VALUES(?,?,?)');
            $data = [
            $this->producto = $producto,
            $this->cantidad = $cantidad,
            $this->fecha = $fecha
            ];
            echo $this->db->inTransaction();
            $sql->execute($data);
            $this->db->commit(); 
        }catch(PDOException $ex){
            echo $ex->getMessage();
            $this->db->rollback();
        }
        
    }

    function delSalida(){
        
    }

    function getSalida(){
        $stmt = $this->db->prepare('SELECT * FROM salidas AS s INNER JOIN producto AS p WHERE s.producto = p.idProducto');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>