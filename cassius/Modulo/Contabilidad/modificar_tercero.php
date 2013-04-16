<?php session_start();
include "php/include_dao.php";

$TercerosDAO = new TercerosDAO();
$terceros = new terceros();
$tercero = $TercerosDAO->get($_REQUEST['id']);

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendtrans(duration=1)">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1"/>
<meta name="description" content="software de propiedad horizontal">
<meta property="og:title" content="Cassius" />
<meta property="og:type" content="software" />
<meta property="og:url" content=""/>
<meta property="og:image" content="" />
<meta property="og:site_name" content="Cassius" />
<title>Cassius - software de propiedad horizontal</title>
<link href="config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link href="contabilidad/css/stylesgregar_tercero.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Scripts/codigo.js"></script>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
<script type="text/javascript" src="Scripts/img.js"></script>
<script type="text/javascript">
function validar_tercero(){
  llamarasincrono('validar_tercero2.php?num=<?php echo $_REQUEST["id2"];?>', 'nom_tercero');
}
function validar_existe(){
  var numero = document.getElementById('numero').value;
  if(<?php echo $tercero->getNodocumento(); ?> == numero){
    llamarasincrono('validar_tercero2.php?num=<?php echo $tercero->getNodocumento(); ?>', 'nom_tercero');
    //llamarasincrono('validar_tercero2.php?numero='+numero, 'nom_tercero');
  }else{
    llamarasincrono('validar_tercero2.php?num=<?php echo $tercero->getNodocumento(); ?>', 'nom_tercero');
   // llamarasincrono('validar_tercero2.php?numero='+numero, 'nom_tercero');
  }
}
</script>
</head>
<body class="interna2" OnContextMenu="return false" onload="validar_tercero();">
<?php
    
    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    if ($view->disableLayout==false)
    {
      include_once ('contabilidad/modificar_terceros.php');//se llama el cuerpo de modificar_terceros
    }
?>
</body>
</html>
