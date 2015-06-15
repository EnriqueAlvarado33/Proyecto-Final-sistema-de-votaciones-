<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>
<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset=utf-8>
	<title>Ingresar un DUI Válido</title>
	<link rel="stylesheet" type="text/css" href="css/estiloparapresidente.css">
	<link rel="shortcut icon" type="image/x-icon" href="image/ic.ico">
</head>

<body bgcolor="#33CCFF">
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


	<header>
		<div class="centra">
			<div class="logo">
				<img src="imagenes/tse.png" alt="Logo" width="160px" height="70px">
		    </div>
		    <div class="logo2">
		        <img src="imagenes/republica.png" alt="Logo" width="170px" height="100px">
		    </div>
		</div>
	</header>
	<div class="centra2" id="cuerpo">
		
		<form method="post" action="SesionDui.php"> 
			<p>Ingrese su Número de DUI</p>

		    <label2 for="dui">Número de DUI</label2>
		    <input name="dui" type="text" class="inputdui" placeholder="00000000-0" required="required" maxlength="10"></br>
		   
		    <input type="submit" value="Entrar" class="btn"> 
		    
		</form>
	</div>
</body>
</html>
<?php }else{
    header("Location: iniciar sesion.php");
 } ?>


