<?php
class Candidato{
    private $idCandidato;
    private $Nombres;
    private $Apellidos;
    private $Dui;
    private $idTipoDeCandidatura;
    private $participacion;
    private $idDepartamentos;
    private $idMunicipios;
    
    public function setidCandidato($idCandidato){
    $this->idCandidato = $idCandidato;
}
public function getidCandidato(){
    return $this->idCandidato;
}

public function setNombres($Nombres){
    $this->Nombres = $Nombres;
}
public function getNombres(){
    return $this->Nombres;
}

public function setApellidos($Apellidos){
    $this->Apellidos = $Apellidos;
}
public function getApellidos(){
    return $this->Apellidos;
}

public function setDui($Dui){
    $this->Dui = $Dui;
}
public function getDui(){
    return $this->Dui;
}
public function setidTipoDeCandidatura($idTipoDeCandidatura){
    $this->idTipoDeCandidatura = $idTipoDeCandidatura;
}
public function getidTipoDeCandidatura(){
    return $this->idTipoDeCandidatura;
}

public function setparticipacion($participacion){
    $this->participacion = $participacion;
}
public function getparticipacion(){
    return $this->participacion;
}

public function setidDepartamentos($idDepartamentos){
    $this->idDepartamentos = $idDepartamentos;
}
public function getidDepartamentos(){
    return $this->idDepartamentos;
}
public function setidMunicipios($idMunicipios){
    $this ->idMunicipios = $idMunicipios;
}
public function getidMunicipios(){
    return $this->idMunicipios;
}


}
?>