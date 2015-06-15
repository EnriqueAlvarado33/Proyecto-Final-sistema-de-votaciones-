<?php
class Coalision{
    private $idCoalision;
    private $PartidoUno;
    private $PartidoDos;
    private $PartidoTres;
    private $Nombre;
    private $Tipo;
    private $Bandera;


    public function getidCoalision(){
        return $this->idCoalision;
    }
    public function setidCoalision($idCoalision) {
        $this->idCoalision = $idCoalision;
    }
    public function getPartidoUno(){
        return $this->PartidoUno;
    }
    
    public function setPartidoUno($PartidoUno) {
        $this->PartidoUno = $PartidoUno;
    }

    public function getPartidoDos(){
        return $this->PartidoDos;
    }
     public function setPartidodos($PartidoDos) {
        $this->PartidoDos = $PartidoDos;
    }
    public function getPartidoTres(){
        return $this->PartidoTres;
    }
     public function setPartidotres($PartidoTres) {
        $this->PartidoTres = $PartidoTres;
    }

    public function getNombre(){
        return $this->Nombre;
    }
     public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function getTipo(){
        return $this->Tipo;
    }
    public function setTipo($Tipo) {
        $this->Tipo = $Tipo;
    }
     public function getBandera(){
        return $this->Bandera;
    }
    public function setBandera($Bandera) {
        $this->Bandera = $Bandera;
    }
}

?>