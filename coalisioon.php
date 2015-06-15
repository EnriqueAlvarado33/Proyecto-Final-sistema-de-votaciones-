<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>
<!doctype html>
<html lang="es">
<head>
<title>COALISION</title>
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
<p>Coalisiones de Partidos</p>


<table border="0px">
  <form method="post" action="ManejadorCoalision.php?accion=save" name="forCoalision" enctype="multipart/form-data">
    <tr>
      <td>
        <label1>Partido 1:</label1>
      </td>
      <td>
        <input name="txtpartidouno" type="text" required="required" maxlength="20" placeholder="Nombre partido 1">
      </td>
    </tr>
    <tr>
      <td>
        <label2>Partido 2:</label2>
      </td>
        <td>
        <input name="txtpartidodos" type="text" required="required" maxlength="20" placeholder="Nombre partido 2">
      </td>
    </tr>
    <tr>
      <td>
        <label2>Partido 3:</label3>
      </td>
        <td>
        <input name="txtpartidotres" type="text" required="required" maxlength="20" placeholder="Nombre partido 3">
      </td>
    </tr>
    <tr>
      <td>
        <label3>Nombre de la coalisión</label3>
      </td>
      <td>
        <input name="txtCoalision" type="text" required="required" maxlength="20" placeholder="Nombre de la coalisión">
      </td>
    </tr>
    <tr>
      <td>
        <label4>Tipo:</label4>
      </td>
      <td>
        <select name="Tipo" required="required">
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
             <input type="file" name="hola">
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
   <?php }else{
    header("Location: iniciar sesion.php");
 } ?>