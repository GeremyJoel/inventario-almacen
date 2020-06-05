<?php

class enProducto{
    private $idEP;
    private $numLote;
    private $cantidad;
    private $fecha_caducidad;
    private $costo_unitario;
    private $entrada;
    private $producto;
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=Almacen','root','');
    }

    function getIdEP(){
        return $this->idEP;
    }

    function setIdEP($id){
        $this->idEP = $id;
    }

    function getNumLote(){
        return $this->numLote;
    }

    function setNumLote($lote){
        $this->numLote = $lote;
    }

    function getCantidad(){
        return $this->cantidad;
    }

    function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }

    function getFechaCaducidad(){
        return $this->fecha_caducidad;
    }

    function setFechaCaducidad($fecha){
        $this->fecha_caducidad = $fecha;
    }

    function getCostoUnitario(){
        return $this->costo_unitario;
    }

    function setCostoUnitario($costo){
        $this->costo_unitario = $costo;
    }

    function getEntrada(){
        return $this->entrada;
    }

    function setEntrada($entrada){
        $this->entrada = $entrada;
    }

    function getProducto(){
        return $this->producto;
    }

    function setProducto($producto){
        $this->producto = $producto;
    }

    function addEP($lote,$cantidad,$fecha,$costo,$entrada,$producto){
        try{
            $this->db->beginTransaction();
            $sql = $this->db->prepare('INSERT INTO entradaproducto(numLote,cantidad,fecha_caducidad,costo_unitario,entrada,producto) VALUES(?,?,?,?,?,?)');
            $data = [
                $this->numLote = $lote,
                $this->cantidad = $cantidad,
                $this->fecha_caducidad = $fecha,
                $this->costo_unitario = $costo,
                $this->entrada = $entrada,
                $this->producto = $producto
            ];
            echo $this->db->inTransaction();
            $sql->execute($data);
            $this->db->commit();
        }catch(PDOException $ex){
            echo $ex->getMessage();
            $this->db->rollback();
        }
    }
}

?>