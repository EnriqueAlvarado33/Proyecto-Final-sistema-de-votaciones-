<?php
class Ciudadano {
private $id;
private $iddui;
private $Nombres;
private $Apellidos;
private $Direccion;
private	$Genero;
private $FechaDeNacimiento;
private $idDepartamento;
private $idMunicipio;

public function setid($id){
	$this->id = $id;
}
public function getid(){
	return $this->id;
}

public function setiddui($iddui){
	$this->iddui = $iddui;
}
public function getiddui(){
	return $this->iddui;
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

public function setDireccion($Direccion){
	$this->Direccion = $Direccion;
}
public function getDireccion(){
	return $this->Direccion;
}
public function setGenero($Genero){
	$this->Genero = $Genero;
}
public function getGenero(){
	return $this->Genero;
}

public function setFechaDeNacimiento($FechaDeNacimiento){
	$this->FechaDeNacimiento = $FechaDeNacimiento;
}
public function getFechaDeNacimiento(){
	return $this->FechaDeNacimiento;
}

public function setidDepartamento($idDepartamento){
	$this->idDepartamento = $idDepartamento;
}
public function getidDepartamento(){
	return $this->idDepartamento;
}
public function setidMunicipio($idMunicipio){
	$this ->idMunicipio = $idMunicipio;
}
public function getidMunicipio(){
	return $this->idMunicipio;
}


}
?>
