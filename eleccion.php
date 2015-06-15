<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<!doctype>
<html lang="es">
<head>
	<meta charset= utf-8>
	<link rel="stylesheet" type="text/css" href="css/tipo.css">
	<title>TRIBUNAL SUPREMO ELECTORAL</title>
</head>

<BODY bgcolor="#33CCFF">
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
                    <input type="text" name="PeriodoElectoral" required="required" placeholder="0000" maxlength="4">
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
<?php }else{
    header("Location: iniciar sesion.php");
 } ?>