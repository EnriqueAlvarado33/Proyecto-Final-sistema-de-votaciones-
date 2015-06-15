<?php 

  class ciudadanoControlador extends Ciudadano {
    public function guardarDatos($con,$objCiudadano) {
        $variableSql = "INSERT INTO ciudadano";
        $variableSql .= "(id,iddui,Nombres,Apellidos,Direccion,Genero,FechaDeNacimiento,idDepartamento,idMunicipio) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objCiudadano[0]."',";
        $variableSql.="'".$objCiudadano[1]."',";
        $variableSql.="'".$objCiudadano[2]."',";
        $variableSql.="'".$objCiudadano[3]."',";
        $variableSql.="'".$objCiudadano[4]."',";
        $variableSql.="'".$objCiudadano[5]."',";
        $variableSql.="'".$objCiudadano[6]."',";
        $variableSql.="'".$objCiudadano[7]."',";
        $variableSql.="".$objCiudadano[8].");";
    return consultaA($con, $variableSql);
    }
  
      public function modificarDatos($con,$objCiudadano){
    $variableSql = "UPDATE ciudadano SET "; //ES PROBABLE Q DE ERROR POR EL NOMBRE DE ALUMNOS
    $variableSql .= " ,iddui = '".$objCiudadano[1]."'";
    $variableSql .= " ,Nombres = '".$objCiudadano[2]."'";
    $variableSql .= " ,Apellidos = '".$objCiudadano[3]."'";
    $variableSql .= " ,Direccion = '".$objCiudadano[4]."'";
    $variableSql .= " ,Genero = '".$objCiudadano[5]."'";
    $variableSql .= " ,FechaDeNacimiento = '".$objCiudadano[6]."'";
    $variableSql .= " ,idDepartamento = '".$objCiudadano[7]."'";
    $variableSql .= " ,idMunicipio = '".$objCiudadano[8]."'";
    $variableSql .= " WHERE id = ".$objCiudadano[0].";";

    return consultaA($con,$variableSql);
    
  }

}
  ?>



