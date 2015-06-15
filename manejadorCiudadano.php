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
    include './/clases/Ciudadano.php';
    include 'ciudadanoControlador.php';
    @$dui=$_POST['Dui'];

    $conexion=mysql_connect("localhost","root","")or die ('Ha fallado la conexión con el servidor: '.mysql_error());
    mysql_select_db("sistemadevotaciones",$conexion)or die ('Error al seleccionar la Base de Datos: '.mysql_error());
//para un dui repetido
    $nuevo_dui=mysql_query("SELECT * from ciudadano where iddui='$dui'");
    $dui_exist = mysql_num_rows($nuevo_dui);


    if ($dui_exist>0) {
        echo "<script type=\"text/javascript\">alert('El Numero de Dui ya existe');window.location.assign('inscripcion de votantes.php');</script>";
    }else{

$alumnoA = new ciudadanoControlador();

$accion = $_REQUEST['accion']; 
switch ($accion) {
    case 'save':
    if (isset($_REQUEST['Guardar'])){  

$alumnoA->setid('NULL');
                $alumnoA->setid('NULL');
                 $alumnoA->setiddui($_REQUEST['Dui']);
                $alumnoA->setNombres($_REQUEST['Nombres']);
                $alumnoA->setApellidos($_REQUEST['Apellidos']);
                $alumnoA->setDireccion($_REQUEST['Direccion']);
                $alumnoA->setGenero($_REQUEST['Genero']);
                $alumnoA->setFechaDeNacimiento($_REQUEST['FechaDeNacimiento']);
                $alumnoA->setidDepartamento($_REQUEST['idDepartamento']);
                $alumnoA->setidMunicipio($_REQUEST['idMunicipio']);

                $datosObj=array($alumnoA->getid(),
                        $alumnoA->getiddui(),
                        $alumnoA->getNombres(),
                        $alumnoA->getApellidos(),
                        $alumnoA->getDireccion(),
                        $alumnoA->getGenero(),
                        $alumnoA->getFechaDeNacimiento(),
                        $alumnoA->getidDepartamento(),
                        $alumnoA->getidMunicipio());

print $alumnoA->guardarDatos($con, $datosObj);
print '<a href=\'manejadorCiudadano.php?accion=con\'>Ver datos</a>';
        }else {
            print 'No se ha enviado datos ';
        }
        break;

        case 'con':
            $sql = 'SELECT * FROM ciudadano';
            //$datos = consultaD($con,$sql);
            $datoss = consultaD($con,$sql);
            print imprimeTabla($datoss,"ciudadano","table table-bordered",1);

            break;

            default:
            print 'No hay Accion que realizar';
            break;
        }
    }

?>

</body>
</html>

