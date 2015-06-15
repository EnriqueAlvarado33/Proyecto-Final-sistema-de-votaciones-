<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistemadevotaciones');
include './clases/Coneccion.php';
$sql ="SELECT * FROM inscripciondecandidatos WHERE idCandidato ='".$_REQUEST['idCandidato']."';";
$datos= consultaD($con, $sql,3);
?>

<!doctype html>
<html lang="es">
<head>
<title>INSCRIPCION DE CANDIDATURA</title>
 <script language="javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilocandidato.css">
</head>

<body>
<p>
	INSCRIPCION DE CANDIDATOS
<table border="0x">
		<form method="post" action="ManejadorCandidato.php?accion=save" method="post" id="inscripciondecandidatos">
			<tr>
				<td>
					<label2>Nombres:</label2>
				</td>
				<td>
					<input name="NombresCandidato" type="text" value="<?php print $datos[0][1]; ?> "placeholder="Nombre Candidato" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label1>Apellidos:</label1>
				</td>
				<td>
					<input name="ApellidosCandidato" type="text" value="<?php print $datos[0][2]; ?>" placeholder="Apellido Candidato" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label1>Dui del Candidato:</label1>
				</td>
				<td>
					<input name="DUICandidato" type="text" value="<?php print $datos[0][3]; ?>" placeholder="00000000-0" required="required" maxlength="10">
				</td>
			</tr>
			<tr>
				<td>
					<label3>Tipo de Candidatura:</label3>
				</td>
				<td>
					<select name="TipoCandidato" required="required">
						<?php echo '<option value="'.$datos[0][4].'">'.utf8_encode($datos[0][4]).'</option>';?>
						<option value="">Seleccionar</option>
						<option value="Alcalde">Alcalde</option>
						<option value="Diputado">Diputado</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label6>Participación</label6>
				</td>
				<td>
					<select name="Participacion" required="required">
						<?php echo '<option value="'.$datos[0][5].'">'.utf8_encode($datos[0][5]).'</option>';?>
		        	    <option value="">Seleccionar</option>
		        	    <option value="Partidaria">Partidaria</option>
		        	    <option value="No Partidaria">No Partidaria</option>
					</select>
				</td>
				<tr>
    			<td>
    				Departamento:
    			</td>
    			<td>
    				<select name="idDepartamento" id="depto" required="required">
                        <?php echo '<option value="'.$datos[0][6].'">'.utf8_encode($datos[0][6]);
                
    $result = $conexion->query("SELECT * FROM departamentos");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
        }
    }
    ?>
                    </select>
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Municipio:
    			</td>
    			<td>
    				<select name="idMunicipio" id="municipio" required="required">
        <?php echo '<option value="'.$datos[0][7].'">'.utf8_encode($datos[0][7]).'</option>';?>  
</select>
    		<tr>
    			<td colspan="2">
    				<input type="submit" name='Guardar' value='Enviar Consulta'>
    			</td>
    		</tr>
    		<tr>
    		</tr>
            </TABLE>

    	</form>
        <script language="javascript">
    $(document).ready(function(){
        $("#depto").change(function () {
            $("#depto option:selected").each(function () {
                id_depto = $(this).val();
                $.post("municipios.php", { id_depto: id_depto }, function(data){
                    $("#municipio").html(data);
                });
            });
        })
    });
</script>
    </body>
</html>
