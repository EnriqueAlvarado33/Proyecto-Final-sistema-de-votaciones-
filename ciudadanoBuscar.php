<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistemadevotaciones');
include './clases/Coneccion.php';
$sql ="SELECT * FROM ciudadano WHERE id ='".$_REQUEST['id']."';";
$datos= consultaD($con, $sql,3);
?>


<html>
    <head> 
        <title>INSCRIPCION DE CANDIDATURA</title>
         <script language="javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estiloformulario.css">
        <h1><center>FORMULARIO DEL VOTANTE</H1></center>
    </head>
    <body>
    	<form action="manejadorCiudadano.php?accion=save" method="post" id="Ciudadano">
            <input type="hidden" name="id" value="<?php print $datos[0][0]; ?>">

            <TABLE border="1">
                <tr>
                <td>
                    Dui:
                </td>
                <td>
                    <input required pattern="[0-9]{8}[-][0-9]{1}" maxlength="10" title="Debe contener 9 digitos seguido de '-' antes del ultimo dijito" type="text" name="Dui" value="<?php print $datos[0][1]; ?>" placeholder="00000000-0" required="required" maxlength="10"><br>
                </td>
            </tr>
    		<tr>
    			<td>
    				Nombres:
    			</td>
    			<td>
    				<input type="text" name="Nombres" value="<?php print $datos[0][2]; ?>" type="text" placeholder="Nombres" required="required" maxlength="35">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Apellidos:
    			</td>
    			<td>
    				<input type="text" name="Apellidos" value="<?php print $datos[0][3]; ?>" type="text" placeholder="Apellidos" required="required" maxlength="35">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Direccion:
    			</td>
    			<td>
    				<input type="text" name="Direccion" value="<?php print $datos[0][4]; ?>" name="Direccion" placeholder="Dirección del Votante" required="required" maxlength="50">
    			</td>
    		</tr>
            <tr>
                <td>
                    Genero:
                </td>
                <td>
                    <select name="Genero" required="requerid">
                        <?php echo '<option value="'.$datos[0][5].'">'.utf8_encode($datos[0][5]).'</option>';?>
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
    				<input type="text" name="FechaDeNacimiento" value="<?php print $datos[0][6]; ?>" type="date" required="required">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Departamento:
    			</td>
    			<td>
    				<select name="idDepartamento" id="depto" required="required">
                        <?php echo '<option value="'.$datos[0][7].'">'.utf8_encode($datos[0][7]);
                
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
    				<select name="idMunicipio" id="municipio" required="required">
        <?php echo '<option value="'.$datos[0][8].'">'.utf8_encode($datos[0][8]).'</option>';?>  
</select>
    			</td>
    		</tr>
    		<tr>
    			<td colspan="2">
    				<input type="submit" name='Guardar' value='Enviar Consulta'>
    			</td>
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

