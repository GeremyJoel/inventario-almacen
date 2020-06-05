<?php

class Producto{
    private $idProducto;
    private $clave;
    private $descripcion;
    private $unidad;
    private $existencia;
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=Almacen','root','');
    }

    #Getters y Setters
    function getIdproducto(){
        return $this->idProducto;
    }

    function setIdProducto($id){
        $this->idProducto = $id;
    }

    function getClave(){
        return $this->clave;
    }

    function setClave(String $clave){
        $this->clave = $clave;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function setDescripcion(String $descripcion){
        $this->descripcion = $descripcion;
    }

    function getUnidad(){
        return $this->unidad;
    }

    function setUnidad(String $unidad){
        $this->unidad = $unidad;
    }

    function getExistencia(){
        return $this->existencia;
    }

    function setExistencia(int $existencia){
        $this->existencia = $existencia;
    }

    function addProducto($clave,$descripcion,$unidad){
        try {
            $sql = $this->db->prepare('INSERT INTO producto(clave,descripcion,unidad_medida) VALUES (?,?,?)');
            $data = [
                $this->clave = $clave,
                $this->descripcion = $descripcion,
                $this->unidad = $unidad
            ];
            $sql->execute($data);
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
      
    }

    function getProductos(){
        $stmt = $this->db->prepare('SELECT * FROM producto');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function setProductos($idProducto, $clave, $descripcion, $unidad, $existencia){
        $stmt = $this->db->prepare('UPDATE producto SET clave=?, descripcion=?, existencia=?,unidad_medida=?  WHERE idProducto=?');
        $data = [
            $clave,
            $descripcion,
            $existencia,
            $unidad,
            $idProducto
        ];
        $stmt->execute($data);
    }

    function delProducto($id){
       $stmt = $this->db->prepare("DELETE FROM producto WHERE idProducto = :id");
       $stmt->bindParam(':id', $id, PDO::PARAM_INT);
       $stmt->execute();
    }
}
?>