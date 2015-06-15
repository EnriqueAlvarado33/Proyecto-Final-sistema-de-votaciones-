<?php 

  class CandidatoControlador extends Candidato {
    public function guardarDatos($con,$objCandidato) {
        $variableSql = "INSERT INTO inscripciondecandidatos";
        $variableSql .= "(idCandidato,Nombres,Apellidos,Dui,idTipoDeCandidatura,participacion,idDepartamentos,idMunicipios) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objCandidato[0]."',";
        $variableSql.="'".$objCandidato[1]."',";
        $variableSql.="'".$objCandidato[2]."',";
        $variableSql.="'".$objCandidato[3]."',";
        $variableSql.="'".$objCandidato[4]."',";
        $variableSql.="'".$objCandidato[5]."',";
        $variableSql.="'".$objCandidato[6]."',";
        $variableSql.="". $objCandidato[7].");";
    return consultaA($con, $variableSql);
    }
  
      public function modificarDatos($con,$objCandidato){
    $variableSql = "UPDATE inscripciondecandidatos SET "; //ES PROBABLE Q DE ERROR POR EL NOMBRE DE ALUMNOS
    $variableSql .= " ,Nombres = '".$objCandidato[1]."'";
    $variableSql .= " ,Apellidos = '".$objCandidato[2]."'";
    $variableSql .= " ,Dui = '".$objCandidato[3]."'";
    $variableSql .= " ,idTipoDeCandidatura = '".$objCandidato[4]."'";
    $variableSql .= " ,idDepartamentos = '".$objCandidato[5]."'";
    $variableSql .= " ,participacion = '".$objCandidato[6]."'";
    $variableSql .= " ,idMunicipios = '".$objCandidato[7]."'";
    $variableSql .= " WHERE idCandidato = ".$objCandidato[0].";";

    return consultaA($con,$variableSql);
    
  }

}
  

?>
