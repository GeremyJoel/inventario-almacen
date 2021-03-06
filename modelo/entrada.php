<?php

class Entrada{
    private $idEntrada;
    private $numPrograma;
    private $fFinanciamiento;
    private $movimiento;
    private $fecha;
    private $folio;
    private $partida;
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=Almacen','root','');
        
    }

    #Getters y Setters
    function getIdEntrada(){
        return $this->idEntrada;
    }

    function setIdEntrada($id){
        $this->idEntrada = $id;
    }

    function getNumprograma(){
        return $this->numPrograma;
    }

    function setNumprograma(String $numprograma){
        $this->numPrograma = $numprograma;
    }

    function getFfinanciamiento(){
        return $this->fFinanciamiento;
    }

    function setFfinanciamiento(String $financiamiento){
        $this->fFinanciamiento = $financiamiento;
    }

    function getMovimiento(){
        return $this->movimiento;
    }

    function setMovimiento(int $movimiento){
        $this->movimiento = $movimiento;
    }

    function getFecha(){
        return $this->fecha;
    }

    function setFecha(String $fecha){
        $this->fecha = $fecha;
    }

    function getFolio(){
        return $this->folio;
    }

    function setFolio(String $folio){
        $this->folio = $folio;
    }

    function addEntrada($numPrograma,$financiamiento,$movimiento,$fecha,$folio,$partida){
        try {
            $sql = $this->db->prepare('INSERT INTO entradas(numPrograma,fFinanciamiento,movimiento,fecha,folio,partida) VALUES (?,?,?,?,?,?)');
            $data =[
            $this->numPrograma = $numPrograma,
            $this->fFinanciamiento = $financiamiento,
            $this->movimiento = $movimiento,
            $this->fecha = $fecha,
            $this->folio = $folio,
            $this->partida = $partida
        ];
            $sql->execute($data);
        }catch(PDOException $ex){
            return $ex->getMessage();
        }
    }

    function delEntrada($id){
        $stmt = $this->db->prepare("DELETE FROM entradas WHERE idEntrada = :id");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }

    function setEntrada($idEntrada,$numprograma, $financiamiento, $movimiento, $fecha,$folio){
        try{
        $stmt = $this->db->prepare('UPDATE entradas SET numPrograma =?,fFinanciamiento=?,movimiento=?,fecha=?, folio=? WHERE idEntrada =?');
        $data = [
            $this->numPrograma = $numprograma,
            $this->fFinanciamiento = $financiamiento,
            $this->movimiento = $movimiento,
            $this->fecha = $fecha,
            $this->folio = $folio,
            $this->idEntrada = $idEntrada
        ];
        $stmt->execute($data);
    }catch(PDOException $err){
        return $err->getMessage();
    }
    }

    function getEntrada(){
        $stmt = $this->db->prepare('SELECT * FROM entrada');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>