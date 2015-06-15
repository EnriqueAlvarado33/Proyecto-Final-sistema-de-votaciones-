<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<!doctype html>
<html lang="es">
<head>
<title>INSCRIPCION DE CANDIDATURA</title>
<link rel="stylesheet" type="text/css" href="css/estilocandidato.css">
</head>

<body>
	 <section>
        <nav>
            <a href="principal.php">Inicio</a>
            <a href="eleccion.php">Eleccion</a>
            <a href="inscipcion de partido.php">Inscripcion De Partido</a>
            <a href="inscripcion de candidatos.php">Inscripcion De Candidato</a>
            <a href="coalisioon.php">Coalision</a>
            <a href="paraasercualquierconsulta.php">Para Hacer Cualquier Consulta</a>
        </nav>
        </section>

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
					<input type="text" name="txtNombres" placeholder="Nombres" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label2>Responsable</label2>
				</td>

				<td>
					<input type="text" name="txtResponsable" placeholder="Responsable" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label3>Bandera</label3>
				</td>
				<td>
				     <input type="file" name="hola">
				</td>
			</tr>
			<tr>
				<td>
					<label3>Dui</label4>
				</td>
				<td>
				     <input required pattern="[0-9]{8}[-][0-9]{1}" maxlength="10" title="Debe contener 9 digitos seguido de '-' antes del ultimo dijito" type="text" name="txtDui" placeholder="00000000-0" required="required" maxlength="10"><br>
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

<?php
} else {
    header("Location: iniciar sesion.php");
 } 
 ?>