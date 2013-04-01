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
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<link href="contabilidad/css/styleagregar_cuentas.css" rel="stylesheet"/>
<script type="text/javascript"> 
function grupo(){
	var clase = document.getElementById('clase').value;
	llamarasincrono('combo_grupo.php?clase='+clase, 'grupo_combo');	
	document.getElementById('agregar_grupo').style.display = "none";
	document.getElementById('agregar_cuenta').style.display = "none";
	document.getElementById('agregar_subcuenta').style.display = "none";
	document.getElementById('cue').style.display = "none";
	document.getElementById('subcue').style.display = "none";
	document.getElementById('aux').style.display = "none";
}
function cuenta(){
	var clase = document.getElementById('clase').value;
	var grupo = document.getElementById('grupo').value;
	
	if(grupo == "agregar"){
		document.getElementById('agregar_grupo').style.display = "";
		document.getElementById('agregar_cuenta').style.display = "none";
		document.getElementById('agregar_subcuenta').style.display = "none";
		document.getElementById('cue').style.display = "none";
		document.getElementById('subcue').style.display = "none";
		document.getElementById('aux').style.display = "none";
		llamarasincrono('agregar_grupo.php?clase='+clase, 'agregar_grupo');				
	}else{
		document.getElementById('agregar_grupo').style.display = "none";
		document.getElementById('agregar_cuenta').style.display = "none";
		document.getElementById('agregar_subcuenta').style.display = "none";
		document.getElementById('cue').style.display = "";
		document.getElementById('subcue').style.display = "none";
		document.getElementById('aux').style.display = "none";
		llamarasincrono('combo_cuenta.php?grupo='+grupo, 'cuenta_combo');
	}
}	
function cuenta2(){
	llamarasincrono('combo_cuenta.php', 'cuenta_combo');
}
function subcuenta(){
	
	var grupo = document.getElementById('grupo').value;
	var cuenta = document.getElementById('cuenta').value;
	if(cuenta == "agregar"){
		document.getElementById('agregar_grupo').style.display = "none";
		document.getElementById('agregar_cuenta').style.display = "";
		document.getElementById('agregar_subcuenta').style.display = "none";
		document.getElementById('cue').style.display = "";
		document.getElementById('subcue').style.display = "none";
		document.getElementById('aux').style.display = "none";
		llamarasincrono('agregar_cuenta_p.php?grupo='+grupo, 'agregar_cuenta');
	}else{
		document.getElementById('agregar_grupo').style.display = "none";
		document.getElementById('agregar_cuenta').style.display = "none";
		document.getElementById('agregar_subcuenta').style.display = "none";
		document.getElementById('cue').style.display = "";
		document.getElementById('subcue').style.display = "";
		document.getElementById('aux').style.display = "none";
		llamarasincrono('combo_subcuenta.php?cuenta='+cuenta, 'subcuenta_combo');
	}
	
}
function subcuenta2(){
	llamarasincrono('combo_subcuenta.php', 'subcuenta_combo');
}
function numero(){
	var subcuenta = document.getElementById('subcuenta').value;
	var cuenta = document.getElementById('cuenta').value;
	if(subcuenta == "agregar"){
		document.getElementById('agregar_grupo').style.display = "none";
		document.getElementById('agregar_cuenta').style.display = "none";
		document.getElementById('agregar_subcuenta').style.display = "";
		document.getElementById('cue').style.display = "";
		document.getElementById('subcue').style.display = "";
		document.getElementById('aux').style.display = "";
		llamarasincrono('agregar_subcuenta.php?cuenta='+cuenta, 'agregar_subcuenta');
	}else{
		document.getElementById('agregar_grupo').style.display = "none";
		document.getElementById('agregar_cuenta').style.display = "none";
		document.getElementById('agregar_subcuenta').style.display = "none";
		document.getElementById('cue').style.display = "";
		document.getElementById('subcue').style.display = "";
		document.getElementById('aux').style.display = "";
		llamarasincrono('auxiliar.php?numero='+subcuenta, 'numero');
	}
	
}
function enviar(){
	var clase = document.getElementById('clase').value;
	if(clase > 0){
		var grupo = document.getElementById('grupo').value;
		if(grupo > 0){
			var cuenta = document.getElementById('cuenta').value;
			if(cuenta > 0){
				var subcuenta = document.getElementById('subcuenta').value;
				if(subcuenta > 0){
					var auxiliar = document.getElementById('auxiliar').value;
					var denominacion = document.getElementById('denominacion').value;
					var descripcion_vivienda = document.getElementById('descripcion_vivienda').value;
				}
			}
		}
	}
	if(clase == 0){
		alert("Seleccione una Clase.");
	}else if(grupo == 0){
		alert("Seleccione un Grupo.");
	}else if(cuenta == 0){
		alert("Seleccione una Cuenta.");
	}else if(subcuenta == 0){
		alert("Seleccione una Subcuenta.");
	}else if(auxiliar == ""){
		alert("Escriba un numero de cuenta Auxiliar.");
		 document.getElementById('auxiliar').focus();
	}else if(denominacion == ""){
		alert("Escriba una denominacion.");
		 document.getElementById('denominacion').focus();
	}else if(descripcion_vivienda == ""){
		alert("Escriba una Descripción de cuenta auxiliar.");
		document.getElementById('descripcion_vivienda').focus();
	}else{
		location.href = "php/action/addCuenta.php?subcuenta="+subcuenta+"&auxiliar="+auxiliar+"&denominacion="+denominacion+"&descripcion_vivienda="+descripcion_vivienda;
	}
}
function MM_preloadImages() {
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function cerrarVentana(){ 
	alert('Nueva Cuenta creada con exito.');
	 window.opener.location.href = window.opener.location.href; 

  if (window.opener.progressWindow) 
		
 { 
    window.opener.progressWindow.close()
  } 
  window.close(); 
}
function cerrar_v(){ 
   window.opener.location.href = window.opener.location.href; 

  if (window.opener.progressWindow) { 
    window.opener.progressWindow.close()
  } 
  window.close(); 
}
</script>
</head>
<body  class="popup" onUnload="cerrar_v()"> 
<?php 
    include "php/include_dao.php";

	$CuentaDAO = new CuentaDAO();
	$cuenta = new cuentas();
	$cuentas = $CuentaDAO->getList(1);

	$view= new stdClass(); 
    $view->disableLayout=false;

    if ($view->disableLayout==false)
    {
      include_once ('/contabilidad/cuerpo/agregar.php');//se llama el la tabla 
    }
?>
</body>
</html>