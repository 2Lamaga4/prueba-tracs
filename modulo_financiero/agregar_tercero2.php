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
<script type="text/javascript" src="Scripts/codigo.js"></script>
<link href="contabilidad/css/stylesgregar_tercero.css" rel="stylesheet" type="text/css" />
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function validar_tercero(){
	var numero = <?php echo $_REQUEST['i']; ?>;
	llamarasincrono('validar_tercero.php?numero='+numero, 'nom_tercero');
	
}

function validar_existe(){

	var numero = document.getElementById('numero').value;

	llamarasincrono('validar_tercero.php?numero=numero,nom_tercero');
}
function cerrarVentana(){ 


alert('Agregarado exitosamente');
 window.opener.location.href = window.opener.location.href; 	
  if (window.opener.progressWindow){     
    window.opener.progressWindow.close()
  } 
  // window.close(); 



}

<?php if($_REQUEST['OK'] == 2){?>
	opener.datos_tercero(<?php echo $_REQUEST['i']; ?>,<?php echo $_REQUEST['nombre']; ?>);
   
<?php }else{?>
	 	window.close();
	 <?php }?>
</script>
</head>
<body class="popup"   <?php if($_GET['OK'] == 2){?> onload="cerrarVentana();"<?php } ?>   OnContextMenu="return false" onload="validar_tercero();">
<?php
$view= new stdClass(); 
    $view->disableLayout=false;

$prueba = $_GET['nombre'];

    if ($view->disableLayout==false)
    {
      include_once ('contabilidad/movimientos/agregar_tercero2.php');
    }
?>
</body>
</html>
