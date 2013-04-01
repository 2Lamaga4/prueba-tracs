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
<link rel="stylesheet" media="screen" href="styles/vlaCal-v2.1.css" type="text/css" />
<link rel="stylesheet" media="screen" href="styles/vlaCal-v2.1-adobe_cs3.css" type="text/css" />
<link rel="stylesheet" media="screen" href="styles/vlaCal-v2.1-apple_widget.css" type="text/css" />
<link href="contabilidad/css/stylemovimiento.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jslib/mootools-1.2-core-compressed.js"></script>
<script type="text/javascript" src="jslib/vlaCal-v2.1-compressed.js"></script>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_openBrWindow(theURL,winName,features) { //v2.0
  ventana=window.open(theURL,winName,features);
  alto=screen.height;
  ancho=screen.width;
  yposi=(alto-540)/2;
  xposi=(ancho-970)/2;
  ventana.moveTo(xposi,yposi);
}
	window.addEvent('domready', function() { 
		new vlaDatePicker('exampleI');
		new vlaDatePicker('exampleII');		
	});	
</script>    
</head>
<body class="interna2" OnContextMenu="return false">
 <?php
   session_start();
include "php/include_dao.php";

unset($_SESSION['arreglo']);
unset($_SESSION['numero']);


$fecha1 = "";
if(isset($_REQUEST['fecha1'])){

  if($_REQUEST['fecha1'] != ""){
  $fecha1 = substr($_REQUEST['fecha1'],6,4)."/".substr($_REQUEST['fecha1'],3,2)."/".substr($_REQUEST['fecha1'],0,2); 
  }
}

$fecha2 = "";
if(isset($_REQUEST['fecha2'])){
  if($_REQUEST['fecha2'] != ""){
    $fecha2 = substr($_REQUEST['fecha2'],6,4)."/".substr($_REQUEST['fecha2'],3,2)."/".substr($_REQUEST['fecha2'],0,2); 
  }
}
$movi = "";
if(isset($_REQUEST['movi'])){
  if($_REQUEST['movi'] != ""){
  $movi = $_REQUEST['movi'];
  }
}

$MovimientosDAO = new MovimientosDAO();
$movimientos = new movimientos();

if($fecha1 != "" && $fecha2 != ""){
  $movimiento = $MovimientosDAO->getList_fecha($fecha1,$fecha2);
}else if($movi != ""){
  $movimiento = $MovimientosDAO->getList_movi($movi);
}else{
  $movimiento = $MovimientosDAO->getList();
}

$TercerosDAO = new TercerosDAO();
$terceros = new terceros();

$DocumentoDAO = new DocumentoDAO();
$documentos = new documentos();

$CuentaDAO = new CuentaDAO();
$cuentas = new cuentas();

    $view= new stdClass(); 
    $view->disableLayout=false;

    if ($view->disableLayout==false)
    {
      include_once ('contabilidad/movimiento.php');
    }
?>
</body>
</html>
