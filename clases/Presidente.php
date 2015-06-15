<?php
class presidente {
private $idpresidente;
private $id_dui;
private $nombre;
private $apellido;
private	$partido;
private $bandera;
private $candidato;
private $departamento;
private $municipio;

public function setidpresidente($idpresidente){
	$this->idpresidente = $idpresidente;
}
public function getidpresidente(){
	return $this->idpresidente;
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

public function setcandidato($candidato){
	$this->candidato = $candidato;
}
public function getcandidato(){
	return $this->candidato;
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
