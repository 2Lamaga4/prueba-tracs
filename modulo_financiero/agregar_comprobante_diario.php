<?php
session_start();
include "php/include_dao.php";

$MovimientosDAO = new MovimientosDAO();
$movimientos = new movimientos();
$movimiento = $MovimientosDAO->getList();

$TercerosDAO = new TercerosDAO();
$terceros = new terceros();
$tercero = $TercerosDAO->getList();

$tercero_lista = array();
foreach ($tercero as $item) {
	$tercero_lista[] = utf8_encode($item->getNombretercero()); 
}
$DocumentoDAO = new DocumentoDAO();
$documentos = new documentos();
$documento = $DocumentoDAO->getList();
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
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script type="text/javascript" src="Scripts/codigo.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type='text/javascript' src='js/jquery.bgiframe.min.js'></script>
<script type='text/javascript' src='js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />
<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
<script type="text/javascript" src="js/datepicker.js"></script>
<script type="text/javascript" src="js/eye.js"></script>
<script type="text/javascript" src="js/utils.js"></script>
<script type="text/javascript" src="js/layout.js?ver=1.0.2"></script>
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
function dato_tercero(){
	var tercero = document.getElementById('tercero').value;
	
	llamarasincrono('tercero_campo.php?tercero='+tercero, 'ter');
	llamarasincrono('tercero_campo2.php?tercero='+tercero, 'ter2');
	
}
function dato_tercero2(){
	llamarasincrono('tercero_campo.php', 'ter');
	llamarasincrono('tercero_campo2.php', 'ter2');
}
function numero_documento(){
	
	var documento = document.getElementById('documento').value;
	var tercero = document.getElementById('tercero').value;
	
	if(tercero == ""){
		alert('Por favor ingrese un tercero.');
		document.getElementById('identifica').value = "";
		document.getElementById('documento').value = 0;
		document.getElementById('identifica').focus();
	}else{
		llamarasincrono('numero_documento.php?documento='+documento, 'num_d');
		llamarasincrono('documentos_cuenta.php?documento='+documento, 'cuentas');
		llamarasincrono('campo_cuenta_movi.php?num=1', 'compo_cuenta_m1');
		mostar_item();
	}
}
function mostar_item(){
	alert('Por favor ingrese a continuacion los valores de las cuentas.');
     llamarasincrono('agregar_item.php', 'agregar_i');
}
function datos_tercero(id,nombre){
	document.getElementById('identifica').value = id;
	document.getElementById('tercero').value = nombre;
	document.getElementById('concepto').focus();
	llamarasincrono('tercero_campo.php?nit='+id, 'ter');
}
function buscar_cuenta(id){
	var idcuenta = document.getElementById('idcuenta'+id).value;
	llamarasincrono('cuenta_documento.php?idcuenta='+idcuenta+'&n='+id, 'cu'+id);
}
function valida_cuenta(id){
	var idcuenta = document.getElementById('idcuenta'+id).value;
	var cuenta = document.getElementById('cuenta'+id).value;
	if(idcuenta.length < 7){
		alert('Por favor ingrese un cuenta auxiliar.');
		 document.getElementById('cuenta'+id).value = "";
		document.getElementById('idcuenta'+id).focus();
	}
	
	if(cuenta == ""){
		alert('Esta cuenta no existe.');
		document.getElementById('idcuenta'+id).focus();
	}	
}
function valida_debito(id){
	var debito = document.getElementById('debito'+id).value;
	if(debito.length > 0){
		 document.getElementById('credito'+id).disabled = "disabled";
	}else{
		 document.getElementById('credito'+id).disabled = "";
	}
}
function valida_credito(id){
	var credito = document.getElementById('credito'+id).value;
	if(credito.length > 0){
		 document.getElementById('debito'+id).disabled = "disabled";
	}else{
		 document.getElementById('debito'+id).disabled = "";
	}
}
function sumar_cuentas_d(id){
	var debito = document.getElementById('debito'+id).value;
	var id_suma_debito = document.getElementById('id_suma_debito').value;
	
	var suma = document.getElementById('suma_debito').value;
	if(debito != "" && (id_suma_debito != id)){
		document.getElementById('suma_debito').value = parseInt(suma) + parseInt(debito);
		document.getElementById('id_suma_debito').value = id;	
	}else{
		document.getElementById('suma_debito').value = debito;	
	}

}	
function validar(){
	var identifica = document.getElementById('identifica').value;
	if(identifica == ""){
		alert("El campo Nit no debe estar vacio.");
		document.getElementById('identifica').focus();
		return false;
	}
	
	var documento = document.getElementById('documento').value;
	if(documento == 0){
		alert("Seleccione un documento.");
		document.getElementById('documento').focus();
		return false;
	}
	
	var concepto = document.getElementById('concepto').value;
	if(concepto == ""){
		alert("El campo Concepto no debe ir vacio.");
		document.getElementById('concepto').focus();
		return false;
	}

}	
function agregar_item(num){
	var num2 =  num + 1;
	llamarasincrono('agregar_item.php?n='+num2, 'agregar_i');
	llamarasincrono('campo_cuenta_movi.php?n='+num2, 'compo_cuenta_m'+num2);
}	
function eliminar_cuenta(id){
	llamarasincrono('campo_cuenta_movi.php?id='+id, 'compo_cuenta_m'+id);
}	
function agregar_Tercero(){
	MM_openBrWindow('agregar_tercero2.php?OK=1&nombre='+document.getElementById('tercero').value,'AgregarTercero','scrollbars=yes,width=970px,height=400px')
}
function cerrarVentana(){ 
	alert('Movimiento creado con exito.');
	 window.opener.location.href = window.opener.location.href; 
	//window.opener.document.forms[0].submit();
  if (window.opener.progressWindow) 		
 { 
	//var id = 1;
    window.opener.progressWindow.close()
  } 
  window.close(); 

}
function cerrar_v(){ 
	alert('Movimiento creado con exito.');
	 window.opener.location.href = window.opener.location.href; 
	//window.opener.document.forms[0].submit();
	
  if (window.opener.progressWindow) 		
 { 
	//var id = 1;
    window.opener.progressWindow.close()
  } 
  
  window.close(); 
}
var tercero = [
<?php
	for($i=0; $i < count($tercero_lista);$i++){
	if(count($tercero_lista) == ($i + 1)){
		$t = "";
	}else{
		$t = ",";
	}
	echo '"'.$tercero_lista[$i].'"'.$t;
	}
?>
];


$().ready(function() {
	$("#tercero").autocomplete(tercero);
	
});

</script>
</head>

<body class="popup" onload="dato_tercero2(); <?php if($_GET['OK'] == 1){?>cerrarVentana()<?php } ?>"  onUnload="cerrar_v()" >

<?php
    $view= new stdClass(); 
    $view->disableLayout=false;
if ($view->disableLayout==false)
    {
      include_once ('contabilidad/movimientos/agregar_componentes_diario.php');
    }
 ?>   
</body>
</html>
