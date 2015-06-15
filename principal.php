<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEMA DE VOTACION</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    	#ghanav{
    		width:100%;
    	}
    	#ghahead{
    		width:100%;
    		background:#aaa;
    	}
    </style>
  </head>
  <body>
  
    <div id="ghanav">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-4">
    				<h2>SISTEMA DE VOTACION</h2>
    				</div>
    				<div class="col-md-8">
    					<ul class="nav nav-pills" style="float:right;margin:20px 0px;">
  						<li class="active"><a href="principal.php">Inicio</a></li>
              <li class="active"><a href="sesion/cerrar.php">Cerrar sesion</a></li>
               <li class="active"><a href="ayuda/ayuda.html">Ayuda</a></li>
					</ul>
    				</div>
    			</div>
    		</div>
    </div>
    <div id="ghahead">
    		<div class="container" <figure></br>
<br><div id="tex">
  <h2>BIENVENIDOS A NUESTRO SISTEMA DE VOTACION </h2>
En este apartado les presentamos el modo de uso de nuestro sistema
para su mejor comprensión leer los siguientes pasos:
Antes  de  iniciar  con las respectivas  inscripciones,  se ve be de verificar  que estén  inscrito los  ciudadanos
Se debe de apertura las elecciones  para a ser los registros correspondientes .
Se debe de registrar los partidos politos en contienda. 
Registrar los candidatos  por cada  partido tanto para alcaldes, diputados y presidente. 

 <p>QUE ESTAS INDICACIONES LE SEAN DE MUCHA UTILIDAD.
GRASIAS…!!

</p>
    			<div class="col-md-4">
    			<br/>
    			<div class="panel panel-default" style="height:400px;">
  				<div class="panel-body">
    				<ul class="nav nav-pills nav-stacked">
  					<li class="active"><a href="Inscripcion de votantes.php">Inscripcion de Votante</a></li>
  					<li><a href="eleccion.php">Eleccion</a></li>
  					<li><a href="inscipcion de partido.php">Inscripcion de Partidos</a></li>
  					<li><a href="inscripcion de candidatos.php">inscripcion de Candidato</a></li>
            <li><a href="coalisioon.php">coalision</a></li>
            <li><a href="paraasercualquierconsulta.php">Para aser cualquier Consulta</a></li>
            <li><a href="Alcalde.php">Inscripcion De Alcaldes</a></li>
            <li><a href="Diputado.php">Inscripcion De Diputados</a></li>
            <li><a href="Presidente.php">Inscripcion De Presidente</a></li>
          
				</ul>
  				</div>
			</div>
    			</div>
    			</div>
    		</div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php }else{
    header("Location: iniciar sesion.php");
 } ?>