<?php
class alcalde {
private $id_alcalde;
private $id_dui;
private $nombre;
private $apellido;
private $partido;
private $bandera;
private $departamento;
private $municipio;

public function setid_alcalde($id_alcalde){
	$this->id_alcalde = $id_alcalde;
}
public function getid_alcalde(){
	return $this->id_alcalde;
}
public function setid_dui($id_dui){
	$this->id_dui = $id_dui;
}
public function getid_dui(){
	return $this->id_dui;
}
public function setnombre($nombre){
	$this->nombre = $nombre;
}
public function getnombre(){
	return $this->nombre;
}

public function setapellido($apellido){
	$this->apellido = $apellido;
}
public function getapellido(){
	return $this->apellido;
}
public function setpartido($partido){
	$this->partido = $partido;
}
public function getpartido(){
	return $this->partido;
}
public function setbandera($bandera){
	$this->bandera = $bandera;
}
public function getbandera(){
	return $this->bandera;
}
public function setdepartamento($departamento){
	$this->departamento = $departamento;
}
public function getdepartamento(){
	return $this->departamento;
}
public function setmunicipio($municipio){
	$this ->municipio = $municipio;
}
public function getmunicipio(){
	return $this->municipio;
}


}
?>