<?php
session_start();
$con = mysqli_connect('127.0.0.1',
    'root','') or die(mysql_error());


if(isset($_POST['dui']) && !empty($_POST['dui'])
){

    $dui=$_POST['dui'];
    

  $sql="select * from sistemadevotaciones.ciudadano
    where Dui='$dui'";

    $result=mysqli_query($con,$sql) 
    or die("Ocurrio un error al hacer la consulta");


    $row=mysqli_fetch_array($result);
    if($row){
       $_SESSION['dui'] = $row;
       ?>
       <script type="text/javascript">
       window.location="";
       </script>

       <?php
    }else
    {
        echo "DUI INCORRECTO";
    }
}
else
    echo "Algun campo esta vacio";
?>