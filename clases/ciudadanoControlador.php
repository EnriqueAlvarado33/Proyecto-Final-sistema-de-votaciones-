<?php
class ciudadanoControlador extends Ciudadano{
    public function guardarDatos($con,$objCiudadano) {
        $variableSql = "INSERT INTO ciudadano";
        $variableSql .= "(idCiudadano,Nombres,Apellidos,Direccion,Genero,FechaDeNacimiento,Dui,idDepartamento,idMunicipio) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objCiudadano[0]."',";
        $variableSql.="'".$objCiudadano[1]."',";
        $variableSql.="'".$objCiudadano[2]."',";
        $variableSql.="'".$objCiudadano[3]."',";
        $variableSql.="'".$objCiudadano[4]."',";
        $variableSql.="'".$objCiudadano[5]."',";
        $variableSql.="'".$objCiudadano[6]."',";
        $variableSql.="'".$objCiudadano[7]."',";
        $variableSql.="'".$objCiudadano[8]."');";
var_dump($variableSql);
    return consultaA($con, $variableSql);
    }


} 

 ?>