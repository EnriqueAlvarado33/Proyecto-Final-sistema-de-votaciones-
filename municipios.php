<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistemadeVotaciones');


$id_depto = $_POST['id_depto'];

$result = $conexion->query("SELECT codigo,nombre FROM municipio
                            WHERE codigo_depto = ".$id_depto." ORDER BY codigo ASC");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
    }
}
echo $html;
