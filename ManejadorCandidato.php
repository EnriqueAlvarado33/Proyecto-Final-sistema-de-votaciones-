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
    include './/clases/Candidato.php';
    include 'CandidatoControlador.php';
    @$dui=$_POST['DUICandidato'];

    $conexion=mysql_connect("localhost","root","")or die ('Ha fallado la conexión con el servidor: '.mysql_error());
    mysql_select_db("sistemadevotaciones",$conexion)or die ('Error al seleccionar la Base de Datos: '.mysql_error());
//para un dui repetido
    $nuevo_dui=mysql_query("SELECT * from inscripciondecandidatos where Dui='$dui'");
    $dui_exist = mysql_num_rows($nuevo_dui);


    if ($dui_exist>0) {
        echo "<script type=\"text/javascript\">alert('El Numero de Dui ya existe');window.location.assign('inscripcion de candidatos.php');</script>";
    }else{

$alumnoA = new CandidatoControlador();

$accion = $_REQUEST['accion']; 
switch ($accion) {
    case 'save':
    if (isset($_REQUEST['Guardar'])){  

$alumnoA->setidCandidato('NULL');
                $alumnoA->setidCandidato('NULL');
                $alumnoA->setNombres($_REQUEST['NombresCandidato']);
                $alumnoA->setApellidos($_REQUEST['ApellidosCandidato']);
                $alumnoA->setDui($_REQUEST['DUICandidato']);
                $alumnoA->setidTipoDeCandidatura($_REQUEST['TipoCandidato']);
                $alumnoA->setparticipacion($_REQUEST['Participacion']);
                $alumnoA->setidDepartamentos($_REQUEST['idDepartamento']);
                $alumnoA->setidMunicipios($_REQUEST['idMunicipio']);

                $datosObj=array($alumnoA->getidCandidato(),
                        $alumnoA->getNombres(),
                        $alumnoA->getApellidos(),
                        $alumnoA->getDui(),
                        $alumnoA->getidTipoDeCandidatura(),
                        $alumnoA->getparticipacion(),
                        $alumnoA->getidDepartamentos(),
                        $alumnoA->getidMunicipios());

print $alumnoA->guardarDatos($con, $datosObj);
print '<a href=\'ManejadorCandidato.php?accion=con\'>Ver datos</a>';
        }else {
            print 'No se ha enviado datos ';
        }
        break;

        case 'con':
        
            $sql = 'SELECT * FROM inscripciondecandidatos';
            //$datos = consultaD($con,$sql);
            $datoss = consultaD($con,$sql);
            print imprimetablaCandidato($datoss,"Candidato","table table-bordered",1);

            break;

            default:
            print 'No hay Accion que realizar';
            break;
        }
    }

?>

</body>
</html>

