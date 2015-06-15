<?php
class CoalisionControlador extends Coalision{
    public function guardarDatos($con,$objetoP){
        $variableSql = "INSERT INTO coalision ";
        $variableSql .= "(idCoalision,PartidoUno,PartidoDos,PartidoTres,Nombre,Tipo,Bandera)" ;
        $variableSql .= "VALUES (";
        $variableSql.="'".$objetoP[0]."',";
        $variableSql.="'".$objetoP[1]."',";
        $variableSql.="'".$objetoP[2]."',";
        $variableSql.="'".$objetoP[3]."',";
        $variableSql.="'".$objetoP[4]."',";
        $variableSql.="'".$objetoP[5]."',";
        $variableSql.="'".$objetoP[6]."');";

        return consultaA($con, $variableSql);
    }

    public function modificarDatos($con,$objetoP) {
        $variableSql = "UPDATE coalision SET  ";
        $variableSql .= "PartidoUno = '".$objetoP[1]."'";
        $variableSql .= ",PartidoDos = '".$objetoP[2]."'";
        $variableSql .= ",PartidoTres = '".$objetoP[3]."'";
        $variableSql .= ",Nombre= '".$objetoP[4]."'";
        $variableSql .= ",Tipo= '".$objetoP[5]."'";
        $variableSql .= ",Bandera= '".$objetoP[6]."'";
        $variableSql .= "WHERE idCoalision= ".$objetoP[0].";";
        return consultaA($con, $variableSql);
  }
} 

?>



  
