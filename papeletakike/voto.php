- <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta meta="description" content="PROTOTIVO DE VOTACIONES" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>EL SALVADOR EN ELECCIONES</title>
  <link rel="stylesheet" href="css/estilo1.css">
  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilo3.css" />
<link href="jquery.keypad.css" rel="stylesheet">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
  
  <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
  
  <script  type = "text/javascript"  src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" > </script>
 <link href="jquery.keypad.css" rel="stylesheet">
<style>
#inlineKeypad { width: 10em; }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="jquery.plugin.js"></script>
<script src="jquery.keypad.js"></script>
<script>
$(function () {
  $('#defaultKeypad').keypad();
  $('#inlineKeypad').keypad({onClose: function() {
    alert($(this).val());
  }});
});
</script>
               
</head>
<body>
 <header>


  <h1>UNA NUEVA FORMA PARA EJERSER TU VOTO</h1>

  </header>
  
  
</div>
</div>


 <div class="jumbotron">
        <form action="voto.php" method="post" id="voto">
            <table class="table-bordered">
            <div class="row">
            
                <div class="col-xs-2">
                    Ingrese su Dui:
                </div>
                <div class="col-xs-2">
                    <input type="text"  id="defaultKeypad"   name="dui" class="required digits form-control"required>
                </div>
            </div>
            <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='BUSCAR' class="btn btn-primary">
                </div>
            </div>
        </table>
        </form>

    
</body>

</html>


<?php
error_reporting(0);
session_start();
 $nombre = $_REQUEST['dui'];

 $conexion = mysql_connect("localhost", "root") or die ("PROBLEMA AL CONECTAR");


 mysql_select_db("sistemadevotaciones", $conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");

 
 $estandar= mysql_query( "SELECT * FROM ciudadano where iddui = '".$nombre."' " ,$conexion);
if($row = mysql_fetch_array($estandar)){
       $_SESSION['dui'] = $row["iddui"];
  header("location: precidente.php   ");
 }else if ( $row = mysql_fetch_array($admin)){
  
} else {
  
}