<?php 

  class DiputadoControlador extends Diputado {
    public function guardarDatos($con,$objDiputado) {
        $variableSql = "INSERT INTO diputado";
        $variableSql .= "(id_diputado,id_dui,nombre,apellido,partido,bandera,departamento,municipio) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objDiputado[0]."',";
        $variableSql.="'".$objDiputado[1]."',";
        $variableSql.="'".$objDiputado[2]."',";
        $variableSql.="'".$objDiputado[3]."',";
        $variableSql.="'".$objDiputado[4]."',";
        $variableSql.="'".$objDiputado[5]."',";
        $variableSql.="'".$objDiputado[6]."',";
        $variableSql.="". $objDiputado[7].");";
    return consultaA($con, $variableSql);
    }
     public function modificarDatos($con,$objDiputado) {
        $variableSql = "UPDATE diputado SET  ";
        $variableSql.="id_dui = '".$objDiputado[1]."',";
        $variableSql.="nombre = '".$objDiputado[2]."',";
        $variableSql.="apellido = '".$objDiputado[3]."',";
        $variableSql.="partido = '".$objDiputado[4]."',";
        $variableSql.="bandera = '".$objDiputado[5]."',";
        $variableSql.="departamento = '".$objDiputado[6]."',";
        $variableSql.="municipio = '".$objDiputado[7]."',";
        $variableSql .= "WHERE id_diputado= ".$objDiputado[0].";";
         return consultaA($con, $variableSql);
     }
}

?>

