<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistemadevotaciones');
include './clases/Coneccion.php';
$sql ="SELECT * FROM tipodecandidatura WHERE idPeriodo ='".$_REQUEST['idPeriodo']."';";
$datos= consultaD($con, $sql,3);
?>

<!doctype>
<html lang="es">
<head>
	<meta charset= utf-8>
	<link rel="stylesheet" type="text/css" href="css/tipo.css">
	<title>TRIBUNAL SUPREMO ELECTORAL</title>
</head>

<BODY bgcolor="#33CCFF">
	<div id="titulo"><h1><img class="loguito"src="imagenes/tribunal.png"width="200px "height="150px "></h1></div>
	<img class="logoo"src="imagenes/republica.jpg"width="200px "height="150px "></h1></div>
	<div id="contenedor"> 	
    	<p><center>Periodo de Elección</p></center>
    <center><table border="1px"></center>
        <form method="post" action="ManejadorPeriodo.php?accion=save" name="Eleccion">
            <tr>
                <td>
                    <label>Tipo:</label>
                </td>
                <td>
                    <select name="Elecciones" required="required">
                    	<?php echo '<option value="'.$datos[0][1].'">'.utf8_encode($datos[0][1]).'</option>';?>
                        <option value="">Seleccionar</option>
                        <option value="Alcaldes y Diputados">Alcaldes y Diputados</option>
                        <option value="Presidenciales">Presidenciales</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Año:</label> 
                </td>
                <td>
                    <input type="text" name="PeriodoElectoral"  value="<?php print $datos[0][2]; ?>" required="required" placeholder="0000" maxlength="4">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input name="btnEleccion" type="submit" class="btnEnviar" value="Guardar">
                </td>
            </tr>
        </form>
    </table>
</div>

</body>
</html>
