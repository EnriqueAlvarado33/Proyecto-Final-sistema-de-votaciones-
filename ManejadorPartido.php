<!DOCTYPE html>
<html> 
<head> 
    <meta charset ="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>::Formulario de Captura de datos de candidatos:</title>
    
    <link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
        <script src="./libs/jquery-2.1.0.js"></script>
        <link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
        <script src="./libs/validacion/jquery.validate.min.js"></script>
        <script src="./libs/validacion/messages.js"></script>
        <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
 
</head> 
<body> 
    <?php
    include './/clases/coneccion.php'; 
    include './/clases/Partido.php';
    include 'PartidoControlador.php';

    @$dui=$_POST['txtDui'];

    $conexion=mysql_connect("localhost","root","")or die ('Ha fallado la conexión con el servidor: '.mysql_error());
    mysql_select_db("sistemadevotaciones",$conexion)or die ('Error al seleccionar la Base de Datos: '.mysql_error());
//para un dui repetido
    $nuevo_dui=mysql_query("SELECT * from inscripcionpartido where dui='$dui'");
    $dui_exist = mysql_num_rows($nuevo_dui);


    if ($dui_exist>0) {
        echo "<script type=\"text/javascript\">alert('El Numero de Dui ya existe');window.location.assign('inscipcion de partido.php');</script>";
    }else{

        
$alumnoA = new PartidoControlador();

$rutaenservidor='imgs';
@$rutatemporal=$_FILES['hola']['tmp_name'];
@$nombreimagen=$_FILES['hola']['name'];
$rutadestino=$rutaenservidor.'/'.$nombreimagen;
move_uploaded_file($rutatemporal,$rutadestino);

$accion = $_REQUEST['accion']; 
switch ($accion) {
    case 'save':
    if (isset($_REQUEST['Guardar'])){  
                $alumnoA ->setidPartidos('NULL');
                $alumnoA ->setNombrePartido($_REQUEST['txtNombres']);
                $alumnoA ->setResponsable($_REQUEST['txtResponsable']);
                $alumnoA ->setBandera($rutadestino);
                $alumnoA ->setDui($_REQUEST['txtDui']);

                $datosObj=array($alumnoA ->getidPartidos(),
                        $alumnoA ->getNombrePartido(),
                        $alumnoA ->getResponsable(),
                        $alumnoA ->getBandera(),
                        $alumnoA ->getDui());

print $alumnoA ->guardarDatos($con, $datosObj);
print '<a href=\'ManejadorPartido.php?accion=con\'>Ver datos</a>';
        }else {
            print 'No se ha enviado datos ';
        }
        break;

        case 'con':
            $sql = 'SELECT * FROM inscripcionpartido';
            //$datos = consultaD($con,$sql);
            $datoss = consultaD($con,$sql);
            print imprimeTablaPartido($datoss,"partido","table table-bordered",1);

            break;

            default:
            print 'No hay Accion que realizar';
            break;
        }

    }


?>

</body>
</html>
