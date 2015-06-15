<?php
	if(isset($_GET["dui"])){
		$con=mysql_connect("localhost","root");
		mysql_select_db("sistemadevotaciones");
		$dui=$_GET["dui"];
		if(mysql_query( $sql = "UPDATE `presidente` SET VOTO = VOTO+1 WHERE `presidente`.`idpresidente` = ".$_GET["partido"].";")){

			echo "GUARDADO";
			mysql_query("update ciudadano set estado=0 where id_dui='".$dui."'");
			 header("location: diputados.php");
		
		
		}else{
			echo "error";
			}
	}
?>