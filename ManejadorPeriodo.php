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
    include './/clases/Periodo.php';
    include 'PeriodoControlador.php';

$periodo= new PeriodoControlador();
$accion=$_REQUEST['accion'];
switch ($accion) {
    case 'save':
    
        if (isset($_REQUEST['btnEleccion'])) {
            $periodo->setidPeriodo('null');
            $periodo->setTipo($_REQUEST['Elecciones']);
            $periodo->setPeriodo($_REQUEST['PeriodoElectoral']);

            $objetoP=array($periodo->getidPeriodo(),
                            $periodo->getTipo(),
                            $periodo->getPeriodo());

            print $periodo ->guardarDatos($con, $objetoP);
print '<a href=\'ManejadorPeriodo.php?accion=con\'>Ver datos</a>';
        }else {
            print 'No se ha enviado datos ';
        }
        break;

        case 'con':
            $sql = 'SELECT * FROM tipodecandidatura';
            //$datos = consultaD($con,$sql);
            $datoss = consultaD($con,$sql);
            print imprimeTablaPeriodo($datoss,"Periodo","table table-bordered",1);

            break;

            default:
            print 'No hay Accion que realizar';
            break;
        }

?>

</body>
</html>
