
<?php
class PartidoControlador extends Partido {
    public function guardarDatos($con,$objPartido){
        $variableSql = "INSERT INTO inscripcionpartido";
        $variableSql .= "(idPartidos,NombrePartido,Responsable,Bandera,Dui)";
        $variableSql .= "VALUES(";
        $variableSql.="'".$objPartido[0]."',";
        $variableSql.="'".$objPartido[1]."',";
        $variableSql.="'".$objPartido[2]."',";
        $variableSql.="'".$objPartido[3]."',";
        $variableSql.="'".$objPartido[4]."');";

        return consultaA($con, $variableSql);
    }

    public function modificarDatos($con,$objPartido) {
        $variableSql = "UPDATE inscripcionpartido SET  ";
        $variableSql .= ",NombrePartido = '".$objPartido[1]."'";
        $variableSql .= ",Responsable = '".$objPartido[2]."'";
         $variableSql .= ",Bandera = '".$objPartido[3]."'";
        $variableSql .= ",Dui = '".$objPartido[4]."'";
        $variableSql .= "WHERE idPartidos = ".$objPartido[0].";";
        return consultaA($con, $variableSql);
  }
} 

?>
