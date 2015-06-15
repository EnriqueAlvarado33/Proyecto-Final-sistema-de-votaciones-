<?php
	if(isset($_GET["dui"])){
		$con=mysql_connect("localhost","root");
		mysql_select_db("sistemadevotaciones");
		$dui=$_GET["dui"];
		if(mysql_query( $sql = "UPDATE `diputado` SET voto = voto+1 WHERE `diputado`.`id_diputado` = ".$_GET["partido"].";")){

			echo "GUARDADO";
		
			 header("location: municipio.php");
		
		
		}else{
			echo "error";
			}
	}
?>