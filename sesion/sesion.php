<?php
session_start();
$con = mysqli_connect('127.0.0.1',
    'root','') or die(mysql_error());


if(isset($_POST['Usuario']) && !empty($_POST['Usuario']) &&
    isset($_POST['Clave']) && !empty($_POST['Clave'])
){

    $user=$_POST['Usuario'];
    $pass=$_POST['Clave'];

  $sql="select * from sistemadevotaciones.iniciodesesion 
    where Usuario='$user' && Clave='$pass'";

    $result=mysqli_query($con,$sql) 
    or die("Ocurrio un error al hacer la consulta");


    $row=mysqli_fetch_array($result);
    if($row){
       $_SESSION['Usuario'] = $row;
       ?>
       <script type="text/javascript">
       window.location="../principal.php";
       </script>

       <?php
    }else
    {
        echo "Usuario o Password No valido";
    }
}
else
    echo "Algun campo esta vacio";
?>