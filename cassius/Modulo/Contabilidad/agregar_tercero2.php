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
<link href="config/estilos_cassius.css" rel="stylesheet"/>
<script src="Scripts/codigo.js"></script>///de aqui sale la funcion llamarsincrono
<link href="contabilidad/css/stylesgregar_tercero.css" rel="stylesheet"/>
<script src="Scripts/globos_ayuda.js" ></script>
<script src="Scripts/bloqueo_clic_derecho.js" ></script>
<script src="Scripts/transicion.js" ></script>
<script src="Scripts/img.js"></script>
<script>
function validar_tercero(){
	var numero = <?php echo $_REQUEST['i']; ?>;
	llamarasincrono('validar_tercero.php?tipodoc='+document.getElementById('documento').value'&numero='+numero, 'nom_tercero');
	//tipodoc,nombre,telefono,correo,numero,direccion,regimen
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
  window.close(); 



}

<?php if($_REQUEST['OK'] == 2){?>
	opener.datos_tercero(<?php echo $_REQUEST['i']; ?>,<?php echo $_REQUEST['nombre']; ?>);
   
<?php }else{?>
	 	window.close();
	 <?php }?>
</script>
</head>
<body class="popup"   <?php if($_GET['OK'] == 2){?> onload="cerrarVentana();"<?php } ?>   OnContextMenu="return false">
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
