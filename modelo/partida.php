<?php

class Partida{
    private $idPartida;
    private $partidaAnt;
    private $numPartida;
    private $nombre;
    private $importe;
    private $db;

    function __construct(){
        $this -> db = new PDO('mysql:host=localhost;dbname=Almacen','root','');
    }

    function getIdPartida(){
        return $this->idPartida;
    }

    function setIdPartida($idPartida){
        $this->idPartida = $idPartida;
    }

    function getPartidaAnt(){
        return $this->partidaAnt;
    }

    function setPartidaAnt($partidaAnt){
        $this->partidaAnt = $partidaAnt;
    }

    function getNumPartida(){
        return $this->numPartida;
    }

    function setNumPartida($numPartida){
        $this->numPartida = $numPartida;
    }

    function getNombre(){
        return $this->Nombre;
    }

    function setNombre($nombre){
        $this->Nombre = $nombre;
    }

    function getImporte(){
        return $this->Importe;
    }

    function setImporte($importe){
        $this->Importe = $importe;
    }

    function addPartida($numPartida,$nombre,$importe){
        try{
            $this->db->beginTransaction();
            $sql = $this->db->prepare('INSERT INTO partida(partidaAnt,numPartida,nombre,importe) VALUES(?,?,?,?)');
            $data = [
                $this->codigo = $numPartida,
                $this->nomPrograma = $numPartida,
                $this->importe = $nombre,
                $this->importe = $importe
            ];
            echo $this->db->inTransaction();
            $sql->execute($data);
            
            $this->db->commit();
            
        }catch(PDOException $ex){
            echo $ex->getMessage();
            $this->db->rollback();
        }
    }

    function delPartida($id){
        $stmt = $this->db->prepare("DELETE FROM partida WHERE idPartida = :id");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }

    function getPartida(){
        $stmt = $this->db->prepare('SELECT * FROM partida');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>