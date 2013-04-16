/**
 * [grupo -->agregar grupo]
 * @return {[get]} [clase(el numero de la clase anexada)]
 */
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
/**
 * [cuenta -->agregar cuenta & crear cuenta]
 * @return {[get]} [clase(el numero de la clase anexada),grupo(el numero del grupo anexado)]
 */
function cuenta(){
	var clase = document.getElementById('clase').value;
	var grupo = document.getElementById('grupo').value;
	/**
	 * [grupo ->agrega nuevo grupo & crear nuevo grupo]
	 */
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
/**
 * [cuenta2 ->llama el archivo  combo_cuenta.php]
 * @return {[get]} [anexo por cuenta_combo]
 */
function cuenta2(){
	llamarasincrono('combo_cuenta.php', 'cuenta_combo');
}
/**
 * [subcuenta ->agregar y crear subcuenta]
 * @return {[get]} [anexo consecutivo para cuenta y grupo]
 */
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
/**
 * [subcuenta2 ->llama el archivo  combo_subcuenta.php]
 * @return {[get]} [anexo por subcuenta_combo]
 */
function subcuenta2(){
	llamarasincrono('combo_subcuenta.php', 'subcuenta_combo');
}
/**
 * [numero ->agregar y crear numero de cuenta]
 * @return {[get]} [anexo consecutivo para cuenta y numero de cuenta]
 */
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
/**
 * [enviar ->envia cada uno de los niveles]
 * @return {[get]} [cada una de los niveles]
 */
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
/**
 * [MM_preloadImages description]
 */
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
/**
 * [cerrarVentana ->luego de creacion de cuenta cierra y refresca la ventana]
 * @return {[comando]} [cerrar ventana]
 */
function cerrarVentana(){ 
	alert('Nueva Cuenta creada con exito.');
	 window.opener.location.href = window.opener.location.href; 
  if (window.opener.progressWindow) 		
 { 
    window.opener.progressWindow.close()
  } 
  window.close(); 
}
/**
 * [cerrar_v ->cierra y refresca la ventana]
 * @return {[comando]} [cerrar ventana]
 */
function cerrar_v(){ 
	 window.opener.location.href = window.opener.location.href; 
  if (window.opener.progressWindow) 		
 { 
    window.opener.progressWindow.close()
  } 
  window.close(); 
}