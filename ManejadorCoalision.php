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
    include './/clases/Coalision.php';
    include 'CoalisionControlador.php';

    $Coalision= new CoalisionControlador();

    $rutaenservidor='imgs';
@$rutatemporal=$_FILES['hola']['tmp_name'];
@$nombreimagen=$_FILES['hola']['name'];
$rutadestino=$rutaenservidor.'/'.$nombreimagen;
move_uploaded_file($rutatemporal,$rutadestino);

$accion=$_REQUEST['accion'];
switch ($accion) {
    case 'save':
    if (isset($_REQUEST['btnCoalision'])){  

            $Coalision->setidCoalision('Null');
            $Coalision->setPartidoUno($_REQUEST['txtpartidouno']);
            $Coalision->setPartidoDos($_REQUEST['txtpartidodos']);
            $Coalision->setPartidoTres($_REQUEST['txtpartidotres']);
            $Coalision->setNombre($_REQUEST['txtCoalision']);
            $Coalision->setTipo($_REQUEST['Tipo']);
            $Coalision->setBandera($rutadestino);

            $objetoP=array($Coalision->getidCoalision(),
                            $Coalision->getPartidoUno(),
                            $Coalision->getPartidoDos(),
                            $Coalision->getPartidoTres(),
                            $Coalision->getNombre(),
                            $Coalision->getTipo(),
                            $Coalision->getBandera());

           
print $Coalision->guardarDatos($con, $objetoP);
print '<a href=\'ManejadorCoalision.php?accion=con\'>Ver datos</a>';
        }else {
            print 'No se ha enviado datos ';
        }
        break;

        case 'con':
            $sql = 'SELECT * FROM coalision';
            //$datos = consultaD($con,$sql);
            $datoss = consultaD($con,$sql);
            print imprimeTablaCoalision($datoss,"coalision","table table-bordered",1);

            break;

            default:
            print 'No hay Accion que realizar';
            break;
        }

?>

</body>
</html>

