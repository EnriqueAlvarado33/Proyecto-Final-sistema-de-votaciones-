<!doctype html>
<html>
<head>

	<meta charset=utf-8>
	<title>INICIO DE SESION</title>
	<link rel="stylesheet" type="text/css" href="estilo1.css">
	<style type="text/css">
	table{
		font-size: 25px;
		background: #ffffff;
		margin: 0 auto;

	}

	body{
		background: #cccfff;
	}

	</style>


</head>
<body>

	
<table>
	<tr>
		<td>
		    <img src="imagenes/iniciosesion.jpg "width="200px "height="150px ">
	    </td>
	    <td>
	    	<form action="sesion/sesion.php" method="post">
	    		<label1>Usuario</label1>
		        <input type="text" name="Usuario">
		        <label1>Clave</label1>
		        <input type="password" name="Clave">
		        <tr>
    			<td colspan="2">
    				<center><input type="submit" name='bot' value='Entrar'></center>
    			</td>
    		</tr>
		    </form>
		</td>

</table>
	
</body>
</html>