<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistemadevotaciones');
include './clases/Coneccion.php';
$sql ="SELECT * FROM inscripcionpartido WHERE idPartidos ='".$_REQUEST['idPartidos']."';";
$datos= consultaD($con, $sql,3);
?>
<!doctype html>
<html lang="es">
<head>
<title>INSCRIPCION DE CANDIDATURA</title>
<link rel="stylesheet" type="text/css" href="css/estilocandidato.css">
</head>

<body>
<p>
	INSCRIPCION DE PARTIDOS
</p>
<table border "0">
	

	<form method="post" action="ManejadorPartido.php?accion=save" enctype="multipart/form-data" >
		<table border="0">
			<td>
					<label1>Nombre De partidos</label1>
				</td>
				<td>
					<input type="text" name="txtNombres" value="<?php print $datos[0][1]; ?>" placeholder="Nombres" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label2>Responsable</label2>
				</td>

				<td>
					<input type="text" name="txtResponsable" value="<?php print $datos[0][2]; ?>" placeholder="Responsable" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label3>Bandera</label3>
				</td>
				<td>
				     <input type="file" name="hola" value="<?php print $datos[0][3]; ?>"
				</td>
			</tr>
			<tr>
				<td>
					<label3>Dui</label4>
				</td>
				<td>
				     <input type="text" name="txtDui" value="<?php print $datos[0][4]; ?>" placeholder="00000000-0" required="required" maxlength="10"><br>
				</td>
			</tr>
			<tr>
    			<td colspan="2">
    				<input type="submit" name='Guardar' value='Enviar Consulta'>
    			</td>
    		</tr>
    	</table>
    	 </form>
</html>
