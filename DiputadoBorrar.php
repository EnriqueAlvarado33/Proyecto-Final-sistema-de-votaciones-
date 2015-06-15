
<html>
<head>
<meta charset="utf-8">
<meta http-aquiv="X-UA-Complatible" content="IE=edge">
<title>REGISTRO ALUMNO</title>
<link rel="stylesheet"  href="./libs/bootstrap/cc/bootstrap.css">
<script src="./libs/jquery-2.1.0.js"></script>
<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/messages.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>

<body>
<?php
include './clases/Coneccion.php';
include  './clases/Diputado.php';
include './DiputadoControlador.php';

$sql="DELETE FROM diputado where id_diputado=".$_REQUEST['id_diputado'].";";
print "<div id='dialogo' title= 'exito' style='display: none;'>";
print '<p>Mensaje:';
print consultaA($con, $sql);
print '<span class="badge glyphicon glyphicon-ok"></span></p>';
			print '<a href=\'ManejadorDiputado.php?accion=con\'>ver datos</a>';
			print "</div>";
?>
<script >
   $(document).ready(function()

   { $("#dialogo").dialog();

   });

</script>

</body>

</html>



