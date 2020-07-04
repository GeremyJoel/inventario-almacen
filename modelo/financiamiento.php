<?php
class Financiamiento{
    private $idFuente;
    private $numFuente;
    private $descripcion;
    private $importe;
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=Almacen','root','');
    }
    function getIdFuente(){
        return $this->idFuente;
    }

    function setIdFuente($idFuente){
        $this->idFuente = $idFuente;
    }

    function getNumFuente(){
        return $this->numFuente;
    }

    function setNumFuente($numFuente){
        $this->numFuente = $numFuente;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    function getImporte(){
        return $this->importe;
    }

    function setImporte(){
        $this->importe = $importe;
    }

    function addFinanciamiento($numFuente,$descripcion){
        try{
            $sql = $this->db->prepare('INSERT INTO ffinanciamiento(numFuente,descripcion) VALUES(?,?)');
            $data = [
                $this->numFuente = $numFuente,
                $this->descripcion = $descripcion
            ];
            $sql->execute($data);
        }catch(PDOException $ex){
            return $ex->getMessage();
        }
    }

    function setFinanciamiento($numero,$nombre,$id){
        try{
            $sql = $this->db->prepare('UPDATE ffinanciamiento SET numFuente = ?,descripcion = ? WHERE idFuente = ?');
            $data = [
                $this->numFuente = $numero,
                $this->descripcion = $nombre,
                $this->idFuente = $id
            ];
            $sql->execute($data);
        }catch(PDOException $ex){
            return $ex->getMessage();
        }
    }

    function delFinanciamiento($id){
        $stmt = $this->db->prepare("DELETE FROM ffinanciamiento WHERE idFuente = :id");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }

    function getFinanciamiento(){
        $stmt = $this->db->prepare('SELECT * FROM ffinanciamiento');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>