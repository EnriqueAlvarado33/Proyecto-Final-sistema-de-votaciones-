<?php
class Partido{
private $idPartidos;
private $NombrePartido;
private $Responsable;
private $Bandera;
private $Dui;


public function setidPartidos($idPartidos){
	$this->idPartidos = $idPartidos;
}
public function getidPartidos(){
	return $this->idPartidos;
}

public function setNombrePartido($NombrePartido){
	$this->NombrePartido = $NombrePartido;
}
public function getNombrePartido(){
	return $this->NombrePartido;
}

public function setResponsable($Responsable){
	$this->Responsable = $Responsable;
}
public function getResponsable(){
	return $this->Responsable;
}

public function setBandera($Bandera){
	$this->Bandera = $Bandera;
}
public function getBandera(){
	return $this->Bandera;
}

public function setDui($Dui){
	$this->Dui = $Dui;
}
public function getDui(){
	return $this->Dui;
}
}
?>
