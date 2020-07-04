<?php

class Programa{
    private $idPrograma;
    private $numPrograma;
    private $nomPrograma;
    private $importe;
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=Almacen','root','');
    }

    function getIdPrograma(){
        return $this->idPrograma;
    }

    function setIdPrograma($idPrograma){
        $this->idC = $idC;
    }

    function getNumPrograma(){
        return $this->numPrograma;
    }

    function setCodigo($numPrograma){
        $this->numPrograma = $numPrograma;
    }

    function getNomPrograma(){
        return $this->nomPrograma;
    }

    function setNomPrograma($nomPrograma){
        $this->nomPrograma = $nomPrograma;
    }

    function getImporte(){
        return $this->importe;
    }

    function setImporte($importe){
        $this->importe = $importe;
    }

    function addPrograma($numPrograma,$nomPrograma,$importe){
        try{
            $sql = $this->db->prepare('INSERT INTO programa(numPrograma,nomPrograma,importe) VALUES(?,?,?)');
            $data = [
                $this->numPrograma = $numPrograma,
                $this->nomPrograma = $nomPrograma,
                $this->importe = $importe
            ];
            $sql->execute($data);
        }catch(PDOException $ex){
            return $ex->getMessage();
        }
    }

    function setPrograma($numPrograma,$nomPrograma,$id){
        try{
            $sql = $this->db->prepare('UPDATE programa SET numPrograma = ?,nomPrograma = ? WHERE idPrograma = ?');
            $data = [
                $this->numPrograma = $numPrograma,
                $this->nomPrograma = $nomPrograma,
                $this->idPrograma = $id
            ];
            $sql->execute($data);
        }catch(PDOException $ex){
            return $ex->getMessage();
        }
    }

    function delPrograma($id){
        $stmt = $this->db->prepare("DELETE FROM programa WHERE idPrograma = :id");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }

    function getPrograma(){
        $stmt = $this->db->prepare('SELECT * FROM programa');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>