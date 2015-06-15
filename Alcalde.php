<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistemadevotaciones');
include './clases/coneccion.php'; 
?>

<!doctype html>
<html lang="es">
<head>
<title>INSCRIPCION DE ALCALDE</title>
 <script language="javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilocandidato.css">
</head>

<body>
<p>
	INSCRIPCION DE ALCALDES
<table border="0x">
		<form method="post" action="ManejadorAlcalde.php?accion=save" method="post" id="alcalde">
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
					<label2>Nombres:</label2>
				</td>
				<td>
					<input name="Nombre" type="text" placeholder="Nombre Alcalde" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label1>Apellidos:</label3>
				</td>
				<td>
					<input name="Apellidos" type="text" placeholder="Apellido Alcalde" required="required" maxlength="35">
				</td>
			</tr>
            <tr>
                <td>
                    <label1>Partido:</label4>
                </td>
                <td>
                    <select name="partido" >
      <option value=""></option>
                        <?php 
                
                            $sql = "SELECT idPartidos,NombrePartido FROM inscripcionpartido;";
                            $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['idPartidos'];
                                print "'>";
                                print $value['NombrePartido'];
                                print "</option>";
                            }                
                        ?>
                         </select >
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

<?php }else{
 header("Location: iniciar sesion.php");
 } ?>
