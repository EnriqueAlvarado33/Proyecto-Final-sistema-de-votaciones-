<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>


<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistemadevotaciones');
include './clases/coneccion.php'; 
?>

<html>
    <head> 
        <title>INSCRIPCION DE CANDIDATURA</title>
        <script language="javascript" src="js/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estiloformulario.css">
        
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

        <h1><center>FORMULARIO DEL VOTANTE</H1></center>

    	<form action="manejadorCiudadano.php?accion=save" method="post" id="Ciudadano">
            <TABLE border="1">
              <tr>
                <td>
                    Dui:
                </td>
                <td>
                    <input required pattern="[0-9]{8}[-][0-9]{1}" maxlength="10" title="Debe contener 9 digitos seguido de '-' antes del ultimo dijito" type="text" name="Dui" placeholder="00000000-0" required="required" maxlength="10"><br>
                </td>
            </tr>
    		<tr>
    			<td>
    				Nombres:
    			</td>
    			<td>
    				<input type="text" name="Nombres" type="text" placeholder="Nombres" required="required" maxlength="35">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Apellidos:
    			</td>
    			<td>
    				<input type="text" name="Apellidos" type="text" placeholder="Apellidos" required="required" maxlength="35">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Direccion:
    			</td>
    			<td>
    				<input type="text" name="Direccion" name="Direccion" placeholder="Dirección" required="required" maxlength="50">
    			</td>
    		</tr>
            <tr>
                <td>
                    Genero:
                </td>
                <td>
                    <select name="Genero">
                        <option value=""></option>
                        <option value="F">F</option>
                        <option value="M">M</option>
                    </select>
                </td>
            </tr>
    		<tr>
    			<td>
    				Fecha De Nacimiento:
    			</td>
    			<td>
    				<input name="FechaDeNacimiento" type="date" required="required">>
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Departamento:
    			</td>
    			<td>
    				<select name="idDepartamento" id="depto">
    <option value="">--------</option>
    <?php
    $result = $conexion->query("SELECT * FROM departamentos");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
        }
    }
    ?>


</select>
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Municipio:
    			</td>
    			<td>
    				<select name="idMunicipio" id="municipio">
    <option value="">------</option>
</select>
    			</td>
    		</tr>
    		<tr>
    			<td colspan="2">
    				<input type="submit" name='Guardar' value='Enviar Consulta'>
    			</td>
    		</tr>
    		<tr>
    		</tr>
            </TABLE>

    	</form>
        <script language="javascript">
    $(document).ready(function(){
        $("#depto").change(function () {
            $("#depto option:selected").each(function () {
                id_depto = $(this).val();
                $.post("municipios.php", { id_depto: id_depto }, function(data){
                    $("#municipio").html(data);
                });
            });
        })
    });
</script>
    </body>
</html>

<?php
 }else{
    header("Location: iniciar sesion.php");
 } ?>