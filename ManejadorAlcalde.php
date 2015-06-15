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
    include './/clases/Alcalde.php';
    include 'AlcaldeControlador.php';
     @$dui=$_POST['Dui'];

    $conexion=mysql_connect("localhost","root","")or die ('Ha fallado la conexión con el servidor: '.mysql_error());
    mysql_select_db("sistemadevotaciones",$conexion)or die ('Error al seleccionar la Base de Datos: '.mysql_error());
//para un dui repetido
    $nuevo_dui=mysql_query("SELECT * from alcalde where id_dui='$dui'");
    $dui_exist = mysql_num_rows($nuevo_dui);


    if ($dui_exist>0) {
        echo "<script type=\"text/javascript\">alert('El Numero de Dui ya existe');window.location.assign('Alcalde.php');</script>";
    }else{

$AlcaldeA = new AlcaldeControlador();

$rutaenservidor='imgs';
@$rutatemporal=$_FILES['hola']['tmp_name'];
@$nombreimagen=$_FILES['hola']['name'];
$rutadestino=$rutaenservidor.'/'.$nombreimagen;
move_uploaded_file($rutatemporal,$rutadestino);


$accion = $_REQUEST['accion']; 
switch ($accion) {
    case 'save':
    if (isset($_REQUEST['Guardar'])){  

$AlcaldeA->setid_alcalde('NULL');
                $AlcaldeA->setid_alcalde('NULL');
                $AlcaldeA->setid_dui($_REQUEST['Dui']);
                $AlcaldeA->setnombre($_REQUEST['Nombre']);
                $AlcaldeA->setapellido($_REQUEST['Apellidos']);
                $AlcaldeA->setpartido($_REQUEST['partido']);
                $AlcaldeA->setbandera($rutadestino);
                $AlcaldeA->setdepartamento($_REQUEST['idDepartamento']);
                $AlcaldeA->setmunicipio($_REQUEST['idMunicipio']);

                $datosObj=array($AlcaldeA->getid_alcalde(),
                        $AlcaldeA->getid_dui(),
                        $AlcaldeA->getnombre(),
                        $AlcaldeA->getapellido(),
                        $AlcaldeA->getpartido(),
                        $AlcaldeA->getbandera(),
                        $AlcaldeA->getdepartamento(),
                        $AlcaldeA->getmunicipio());

print $AlcaldeA->guardarDatos($con, $datosObj);
print '<a href=\'ManejadorAlcalde.php?accion=con\'>Ver datos</a>';
        }else {
            print 'No se ha enviado datos ';
        }
        break;

        case 'con':
            $sql = 'SELECT * FROM alcalde';
            //$datos = consultaD($con,$sql);
            $datoss = consultaD($con,$sql);
            print imprimeTablaAlcalde($datoss,"alcalde","table table-bordered",1);

            break;

            default:
            print 'No hay Accion que realizar';
            break;
        }
    }

?>

</body>
</html>
