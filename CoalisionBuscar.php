<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistemadevotaciones');
include './clases/Coneccion.php';
$sql ="SELECT * FROM Coalision WHERE idCoalision ='".$_REQUEST['idCoalision']."';";
$datos= consultaD($con, $sql,3);
?>

<!doctype html>
<html lang="es">
<head>
<title>COALISION</title>
<link rel="stylesheet" type="text/css" href="css/estilocandidato.css">
</head>

<body>
<p>Coalisiones de Partidos</p>


<table border="0px">
  <form method="post" action="ManejadorCoalision.php?accion=save" name="forCoalision" enctype="multipart/form-data">
    <tr>
      <td>
        <label1>Partido 1:</label1>
      </td>
      <td>
        <input name="txtpartidouno" type="text" value="<?php print $datos[0][1]; ?>" required="required" maxlength="20" placeholder="Nombre partido 1">
      </td>
    </tr>
    <tr>
      <td>
        <label2>Partido 2:</label2>
      </td>
        <td>
        <input name="txtpartidodos" type="text" value="<?php print $datos[0][2]; ?>" required="required" maxlength="20" placeholder="Nombre partido 2">
      </td>
    </tr>
    <tr>
      <td>
        <label2>Partido 3:</label3>
      </td>
        <td>
        <input name="txtpartidotres" type="text" value="<?php print $datos[0][3]; ?>" required="required" maxlength="20" placeholder="Nombre partido 3">
      </td>
    </tr>
    <tr>
      <td>
        <label3>Nombre de la coalisión</label3>
      </td>
      <td>
        <input name="txtCoalision" type="text"value="<?php print $datos[0][4]; ?>" required="required" maxlength="20" placeholder="Nombre de la coalisión">
      </td>
    </tr>
    <tr>
      <td>
        <label4>Tipo:</label4>
      </td>
      <td>
        <select name="Tipo" required="required">
        <?php echo '<option value="'.$datos[0][5].'">'.utf8_encode($datos[0][5]).'</option>';?>
          <option value="">Seleccionar</option>
          <option value="Alcaldes">Alcaldes</option>
          <option value="Diputados">Diputados</option>
          <option value="Presidentes">Presidentes</option>
        </select>
      </td>
    </tr>
   <tr>
        <td>
          <label3>Bandera</label3>
        </td>
        <td>
             <input type="file" name="hola" value="<?php print $datos[0][3]; ?>"> 
        </td>
      </tr>
    <tr>
      <td colspan="2">
        <input name="btnCoalision" type="submit" class="btnEnviar" value="Guardar">
      </td>
    </tr>
  </form>
</table>

</body>
</html>
