<?php
	if(isset($_GET["dui"])){
		$con=mysql_connect("localhost","root");
		mysql_select_db("sistemadevotaciones");
		$dui=$_GET["dui"];
		if(mysql_query( $sql = "UPDATE `alcalde` SET voto = voto+1 WHERE `alcalde`.`id_alcalde` = ".$_GET["partido"].";")){

			echo "GUARDADO";
		
			 header("location: voto.php");
		
		
		}else{
			echo "error";
			}
	}
?>