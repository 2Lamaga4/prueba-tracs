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

function validar(){
  
	var documento = document.getElementById('documento').value;
	if(documento == 0){
		alert('Seleccione un tipo de documento.');
		document.getElementById('documento').focus();
		return false;
	}	
	var numero = document.getElementById('numero').value;
	if(numero == ""){
		alert('Digite el numero del documento.');
		document.getElementById('numero').focus();
		return false;
	}
	var nombre = document.getElementById('nombre').value;
	if(nombre == ""){
		alert('Digite el Nombre.');
		document.getElementById('nombre').focus();
		return false;
	}	
	var telefono = document.getElementById('telefono').value;
	if(telefono == ""){
		alert('Digite el Telefono.');
		document.getElementById('telefono').focus();
		return false;
	}
	var direccion = document.getElementById('direccion').value;
	if(direccion == ""){
		alert('Digite la Direccion.');
		document.getElementById('direccion').focus();
		return false;
	}	
	var correo = document.getElementById('correo').value;
	if (correo == ""){
		alert("Digite el Correo.");
		document.getElementById('correo').focus();
		return false;
	}	
	
	if ((correo.indexOf('@', 0) == -1) || (correo.length < 5) || (correo.indexOf('.', 0) == -1)) 	
	{
	  alert("Correo no válido (ejemplo@cassius.com).");
	  return false
	}
	var regimen = document.getElementById('regimen').value;
	if(regimen == 0){
		alert('Seleccione un Regimen.');
		document.getElementById('regimen').focus();
		return false;
	}
}

function validar_tercero(){
	var numero = <?php echo $_REQUEST['i']; ?>;
	llamarasincrono('validar_tercero.php?numero='+numero, 'nom_tercero');

	//window.close();
}

function validar_existe(){

	var numero = document.getElementById('numero').value;

	llamarasincrono('validar_tercero.php?numero=numero,nom_tercero');
}

<?php if($_REQUEST['OK'] == 2){?>
	alert('Agregando tercero.');
	opener.datos_tercero(<?php echo $_REQUEST['i']; ?>,<?php echo $_REQUEST['nombre']; ?>);
   
<?php }else{?>
	 window.close();
	 <?php }?>

</script>
</head>

<body class="popup" OnContextMenu="return false" onload="validar_tercero();">

<?php
$view= new stdClass(); 
    $view->disableLayout=false;

    if ($view->disableLayout==false)
    {
      include_once ('contabilidad/movimientos/agregar_tercero2.php');
    }
?>
</body>
</html>
