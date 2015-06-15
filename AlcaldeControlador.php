<?php 

  class AlcaldeControlador extends alcalde {
    public function guardarDatos($con,$objAlcalde) {
        $variableSql = "INSERT INTO alcalde";
        $variableSql .= "(id_alcalde,id_dui,nombre,apellido,partido,bandera,departamento,municipio) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objAlcalde[0]."',";
        $variableSql.="'".$objAlcalde[1]."',";
        $variableSql.="'".$objAlcalde[2]."',";
        $variableSql.="'".$objAlcalde[3]."',";
        $variableSql.="'".$objAlcalde[4]."',";
        $variableSql.="'".$objAlcalde[5]."',";
        $variableSql.="'".$objAlcalde[6]."',";
        $variableSql.="". $objAlcalde[7].");";
    return consultaA($con, $variableSql);
    }

    public function modificarDatos($con,$objAlcalde) {
        $variableSql = "UPDATE alcalde SET  ";
        $variableSql .= "id_dui = '".$objAlcalde[1]."'";
        $variableSql.="nombre = '".$objAlcalde[2]."',";
        $variableSql.="apellido = '".$objAlcalde[3]."',";
        $variableSql.="partido = '".$objAlcalde[4]."',";
        $variableSql.="bandera = '".$objAlcalde[5]."',";
        $variableSql.="departamento'".$objAlcalde[6]."',";
        $variableSql.="municipio = '".$objAlcalde[7]."',";
        $variableSql .= "WHERE id_alcalde= ".$objAlcalde[0].";";
        return consultaA($con, $variableSql);
    }
}

?>
   