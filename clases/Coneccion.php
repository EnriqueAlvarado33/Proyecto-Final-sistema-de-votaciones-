<?php
$dsn = 'mysql:dbname=sistemadevotaciones;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try{
	$con = new PDO($dsn,$usuario,$clave);

}catch (PDOException $e) {
	print "<div id='dialogo' title='Error Salida' style='display:none;'>";
	print '<p> Error Generado:</p>';
	print '<p><span class="label label-warning glyphicon glyphicon-remove">Codigo:</span></p>';
	print $e->getCode();
	print '<p><span class="label label-warning glyphicon glyphicon-remove">Mensaje de Error:</span></p>';
	print $e->getMessage(); 
	print "</div>";
}

function consultaA($coneccion,$sql){
	$ejecutor = $coneccion;
	$msgok = NULL;
	$msgerror = NULL;

	try{ $condicion = strstr(trim($sql)," ",TRUE);
	switch ($condicion) {
		case "INSERT":
			$msgerror= "no se ha podido insertar los datos";
			$msgok = "datos insertados";
			break;
		case "DELETE":
			$msgerror = "no se ha podido eliminar los datos";
			$msgok = "datos eliminados";
			break;
		case "UPDATE":
			$msgerror = "No se ha podido actualizar los datos";
			$msgok = " Datos actualizados";
			break;

		default:
			$msgerror = "Es posible que no use un estandar SQL";
			break;
	}

	$ejecutor->beginTransaction();
	$fila = $ejecutor->exec ($sql);
	$ejecutor->commit();


if ($fila == 0 ) {	
	$msgok = $msgerror. " no existe coincidencia para realizar la accion sobre los elementos";
return $msgok."filas afectadas ".$fila;
} 
	}catch (Exception $exc){
		$ejecutor->rollback();
		return $msgerror. ":<br>".$exc->getMessage() ;

	}

}

function consultaD($coneccion,$sql,$modo=2,$presentacion=FALSE){
	$ejecutor= $coneccion;
	$manejador = trim($sql) ;
	$devolucion = "" ;
	
	try {$datos = $ejecutor->query($manejador);
		$datos-> setFetchMode($modo) ;
		if ($presentacion==TRUE){
			$devolucion.= "<table border = 1 >";
			foreach ($datos->fetchAll() as $registros){
				$devolucion.="<tr>";
				foreach ($registros as $valor){
					$devolucion.="<td>".$valor."</td>";
				}
				$devolucion.= "</tr>";
			
			}
			$devolucion.="</table>";
				}else{
					$contenedor = $datos->fetchAll();
					$devolucion= $contenedor;
				}


	}catch (Exception $exc ) {
		return "No se pudieron consultar los datos<br />".$exc->getMessage();
	}
	return $devolucion;
}

function imprimetabla($objeto,$form,$estilo="table",$editar=0){
	if ($objeto != NULL) {
		if (is_array($objeto)) {
			$tabla = "<table class=\"$estilo\">";
			$tabla .="<tr class'info'>";
			foreach (array_keys($objeto[0]) as $value) {
				$tabla .= "<th>";
				$tabla .= $value;
				$tabla .= "</th>";
			
			}
			if ($editar != "0") {
				$tabla .= "<td>Modificar</td><td>Eliminar</td>";
			
			}
			$tabla .= "</tr><tr>";
			foreach ($objeto as $datos) {
				foreach ($datos as $registro ) {
					$tabla .= "<td>";
					$tabla .= $registro;
					$tabla .= "</td>";
				}
				if ($editar != "0") {
					@$tabla .= "<td><a href=".$form."Buscar.php?id=".$datos['id'].">Modificar</a></dt>";
					@$tabla .= "<td><a href=".$form."Borrar.php?id=".$datos['id'].">Eliminar</a></td>";
				}
				$tabla .= "</tr>";
			}
		 $tabla .= "</table>";	
		} else {
			$tabla = "no hay regisrto que mostrar";
		}
	
	} else {
		$tabla = "Debe pasarse un arreglo como parametro";
	}
	return $tabla;echo "yyyyyyyyy";
}
function imprimetablaPartido($objeto,$form,$estilo="table",$editar=0){
	if ($objeto != NULL) {
		if (is_array($objeto)) {
			$tabla = "<table class=\"$estilo\">";
			$tabla .="<tr class'info'>";
			foreach (array_keys($objeto[0]) as $value) {
				$tabla .= "<th>";
				$tabla .= $value;
				$tabla .= "</th>";
			
			}
			if ($editar != "0") {
				$tabla .= "<td>Modificar</td><td>Eliminar</td>";
			
			}
			$tabla .= "</tr><tr>";
			foreach ($objeto as $datos) {
				foreach ($datos as $registro ) {
					$tabla .= "<td>";
					$tabla .= $registro;
					$tabla .= "</td>";
				}
				if ($editar != "0") {
					@$tabla .= "<td><a href=".$form."Buscar.php?idPartidos=".$datos['idPartidos'].">Modificar</a></dt>";
					@$tabla .= "<td><a href=".$form."Borrar.php?idPartidos=".$datos['idPartidos'].">Eliminar</a></td>";
				}
				$tabla .= "</tr>";
			}
		 $tabla .= "</table>";	
		} else {
			$tabla = "no hay regisrto que mostrar";
		}
	
	} else {
		$tabla = "Debe pasarse un arreglo como parametro";
	}
	return $tabla;echo "yyyyyyyyy";
}

function imprimetablaCandidato($objeto,$form,$estilo="table",$editar=0){
	if ($objeto != NULL) {
		if (is_array($objeto)) {
			$tabla = "<table class=\"$estilo\">";
			$tabla .="<tr class'info'>";
			foreach (array_keys($objeto[0]) as $value) {
				$tabla .= "<th>";
				$tabla .= $value;
				$tabla .= "</th>";
			
			}
			if ($editar != "0") {
				$tabla .= "<td>Modificar</td><td>Eliminar</td>";
			
			}
			$tabla .= "</tr><tr>";
			foreach ($objeto as $datos) {
				foreach ($datos as $registro ) {
					$tabla .= "<td>";
					$tabla .= $registro;
					$tabla .= "</td>";
				}
				if ($editar != "0") {
					@$tabla .= "<td><a href=".$form."Buscar.php?idCandidato=".$datos['idCandidato'].">Modificar</a></dt>";
					@$tabla .= "<td><a href=".$form."Borrar.php?idCandidato=".$datos['idCandidato'].">Eliminar</a></td>";
				}
				$tabla .= "</tr>";
			}
		 $tabla .= "</table>";	
		} else {
			$tabla = "no hay regisrto que mostrar";
		}
	
	} else {
		$tabla = "Debe pasarse un arreglo como parametro";
	}
	return $tabla;echo "yyyyyyyyy";
}
function imprimetablaPeriodo($objeto,$form,$estilo="table",$editar=0){
	if ($objeto != NULL) {
		if (is_array($objeto)) {
			$tabla = "<table class=\"$estilo\">";
			$tabla .="<tr class'info'>";
			foreach (array_keys($objeto[0]) as $value) {
				$tabla .= "<th>";
				$tabla .= $value;
				$tabla .= "</th>";
			
			}
			if ($editar != "0") {
				$tabla .= "<td>Modificar</td><td>Eliminar</td>";
			
			}
			$tabla .= "</tr><tr>";
			foreach ($objeto as $datos) {
				foreach ($datos as $registro ) {
					$tabla .= "<td>";
					$tabla .= $registro;
					$tabla .= "</td>";
				}
				if ($editar != "0") {
					@$tabla .= "<td><a href=".$form."Buscar.php?idPeriodo=".$datos['idPeriodo'].">Modificar</a></dt>";
					@$tabla .= "<td><a href=".$form."Borrar.php?idPeriodo=".$datos['idPeriodo'].">Eliminar</a></td>";
				}
				$tabla .= "</tr>";
			}
		 $tabla .= "</table>";	
		} else {
			$tabla = "no hay regisrto que mostrar";
		}
	
	} else {
		$tabla = "Debe pasarse un arreglo como parametro";
	}
	return $tabla;echo "yyyyyyyyy";
}
function imprimetablaCoalision($objeto,$form,$estilo="table",$editar=0){
	if ($objeto != NULL) {
		if (is_array($objeto)) {
			$tabla = "<table class=\"$estilo\">";
			$tabla .="<tr class'info'>";
			foreach (array_keys($objeto[0]) as $value) {
				$tabla .= "<th>";
				$tabla .= $value;
				$tabla .= "</th>";
			
			}
			if ($editar != "0") {
				$tabla .= "<td>Modificar</td><td>Eliminar</td>";
			
			}
			$tabla .= "</tr><tr>";
			foreach ($objeto as $datos) {
				foreach ($datos as $registro ) {
					$tabla .= "<td>";
					$tabla .= $registro;
					$tabla .= "</td>";
				}
				if ($editar != "0") {
					@$tabla .= "<td><a href=".$form."Buscar.php?idCoalision=".$datos['idCoalision'].">Modificar</a></dt>";
					@$tabla .= "<td><a href=".$form."Borrar.php?idCoalision=".$datos['idCoalision'].">Eliminar</a></td>";
				}
				$tabla .= "</tr>";
			}
		 $tabla .= "</table>";	
		} else {
			$tabla = "no hay regisrto que mostrar";
		}
	
	} else {
		$tabla = "Debe pasarse un arreglo como parametro";
	}
	return $tabla;echo "yyyyyyyyy";
}
function imprimetablaPresidente($objeto,$form,$estilo="table",$editar=0){
	if ($objeto != NULL) {
		if (is_array($objeto)) {
			$tabla = "<table class=\"$estilo\">";
			$tabla .="<tr class'info'>";
			foreach (array_keys($objeto[0]) as $value) {
				$tabla .= "<th>";
				$tabla .= $value;
				$tabla .= "</th>";
			
			}
			if ($editar != "0") {
				$tabla .= "<td>Modificar</td><td>Eliminar</td>";
			
			}
			$tabla .= "</tr><tr>";
			foreach ($objeto as $datos) {
				foreach ($datos as $registro ) {
					$tabla .= "<td>";
					$tabla .= $registro;
					$tabla .= "</td>";
				}
				if ($editar != "0") {
					@$tabla .= "<td><a href=".$form."Buscar.php?idpresidente=".$datos['idpresidente'].">Modificar</a></dt>";
					@$tabla .= "<td><a href=".$form."Borrar.php?idpresidente=".$datos['idpresidente'].">Eliminar</a></td>";
				}
				$tabla .= "</tr>";
			}
		 $tabla .= "</table>";	
		} else {
			$tabla = "no hay regisrto que mostrar";
		}
	
	} else {
		$tabla = "Debe pasarse un arreglo como parametro";
	}
	return $tabla;echo "yyyyyyyyy";
}
function imprimetablaAlcalde($objeto,$form,$estilo="table",$editar=0){
	if ($objeto != NULL) {
		if (is_array($objeto)) {
			$tabla = "<table class=\"$estilo\">";
			$tabla .="<tr class'info'>";
			foreach (array_keys($objeto[0]) as $value) {
				$tabla .= "<th>";
				$tabla .= $value;
				$tabla .= "</th>";
			
			}
			if ($editar != "0") {
				$tabla .= "<td>Modificar</td><td>Eliminar</td>";
			
			}
			$tabla .= "</tr><tr>";
			foreach ($objeto as $datos) {
				foreach ($datos as $registro ) {
					$tabla .= "<td>";
					$tabla .= $registro;
					$tabla .= "</td>";
				}
				if ($editar != "0") {
					@$tabla .= "<td><a href=".$form."Buscar.php?id_alcalde=".$datos['id_alcalde'].">Modificar</a></dt>";
					@$tabla .= "<td><a href=".$form."Borrar.php?id_alcalde=".$datos['id_alcalde'].">Eliminar</a></td>";
				}
				$tabla .= "</tr>";
			}
		 $tabla .= "</table>";	
		} else {
			$tabla = "no hay regisrto que mostrar";
		}
	
	} else {
		$tabla = "Debe pasarse un arreglo como parametro";
	}
	return $tabla;echo "yyyyyyyyy";
}
function imprimetablaDiputado($objeto,$form,$estilo="table",$editar=0){
	if ($objeto != NULL) {
		if (is_array($objeto)) {
			$tabla = "<table class=\"$estilo\">";
			$tabla .="<tr class'info'>";
			foreach (array_keys($objeto[0]) as $value) {
				$tabla .= "<th>";
				$tabla .= $value;
				$tabla .= "</th>";
			
			}
			if ($editar != "0") {
				$tabla .= "<td>Modificar</td><td>Eliminar</td>";
			
			}
			$tabla .= "</tr><tr>";
			foreach ($objeto as $datos) {
				foreach ($datos as $registro ) {
					$tabla .= "<td>";
					$tabla .= $registro;
					$tabla .= "</td>";
				}
				if ($editar != "0") {
					@$tabla .= "<td><a href=".$form."Buscar.php?id_diputado=".$datos['id_diputado'].">Modificar</a></dt>";
					@$tabla .= "<td><a href=".$form."Borrar.php?id_diputado=".$datos['id_diputado'].">Eliminar</a></td>";
				}
				$tabla .= "</tr>";
			}
		 $tabla .= "</table>";	
		} else {
			$tabla = "no hay regisrto que mostrar";
		}
	
	} else {
		$tabla = "Debe pasarse un arreglo como parametro";
	}
	return $tabla;echo "yyyyyyyyy";
}

?>
