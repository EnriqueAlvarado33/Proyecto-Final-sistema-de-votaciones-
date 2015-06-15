<?php 

  class PresidenteControlador extends presidente {
    public function guardarDatos($con,$objPresidente) {
        $variableSql = "INSERT INTO presidente";
        $variableSql .= "(idpresidente,id_dui,nombre,apellido,partido,bandera,candidato,departamento,municipio) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objPresidente[0]."',";
        $variableSql.="'".$objPresidente[1]."',";
        $variableSql.="'".$objPresidente[2]."',";
        $variableSql.="'".$objPresidente[3]."',";
        $variableSql.="'".$objPresidente[4]."',";
        $variableSql.="'".$objPresidente[5]."',";
        $variableSql.="'".$objPresidente[6]."',";
        $variableSql.="'".$objPresidente[7]."',";
        $variableSql.="".$objPresidente[8].");";
    return consultaA($con, $variableSql);
    }
     public function modificarDatos($con,$objPresidente) {
         $variableSql = "UPDATE presidente SET  ";
        $variableSql.=",id_dui = '".$objPresidente[1]."'";
        $variableSql.=",nombre = '".$objPresidente[2]."',";
        $variableSql.=",apellido = '".$objPresidente[3]."',";
        $variableSql.=",partido = '".$objPresidente[4]."',";
        $variableSql.=",bandera = '".$objPresidente[5]."',";
        $variableSql.=",candidato = '".$objPresidente[6]."',";
        $variableSql.=",departamento = '".$objPresidente[7]."',";
        $variableSql.=",municipio = '".$objPresidente[8]."',";
         $variableSql .= "WHERE idpresidente = ".$objPresidente[0].";";
        return consultaA($con, $variableSql);
  }
        
}
?>
