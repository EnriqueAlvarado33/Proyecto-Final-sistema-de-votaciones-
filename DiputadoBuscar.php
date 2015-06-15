<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistemadevotaciones');
include './clases/Coneccion.php';
$sql ="SELECT * FROM diputado WHERE id_diputado ='".$_REQUEST['id_diputado']."';";
$datos= consultaD($con, $sql,3);
?>

<!doctype html>
<html lang="es">
<head>
<title>INSCRIPCION DE DIPUTADOS</title>
 <script language="javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilocandidato.css">
</head>

<body>
<p>
	INSCRIPCION DE DIPUTADOS
<table border="0x">
		<form method="post" action="ManejadorDiputado.php?accion=save" method="post" id="diputado" value="<?php print $datos[0][0]; ?>">
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
					<label2>Nombres:</label2>
				</td>
				<td>
					<input name="nombre" value="<?php print $datos[0][2]; ?>" type="text" placeholder="Nombre Diputado" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label1>Apellidos:</label3>
				</td>
				<td>
					<input name="Apellidos" value="<?php print $datos[0][3]; ?>" type="text" placeholder="Apellido Diputado" required="required" maxlength="35">
				</td>
			</tr>
            <tr>
                <td>
                    <label1>Partido:</label4>
                </td>
                <td>
                   <select name="partido" value="<?php print $datos[0][4]; ?>" >
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
                     <input type="file" name="hola" value="<?php print $datos[0][5]; ?>">
                </td>
            </tr>
				<tr>
    			<td>
    				Departamento:
    			</td>
    			<td>
    				<select name="idDepartamento" id="depto">
     <?php echo '<option value="'.$datos[0][6].'">'.utf8_encode($datos[0][6]);
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
     <?php echo '<option value="'.$datos[0][7].'">'.utf8_encode($datos[0][7]).'</option>';?>  
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