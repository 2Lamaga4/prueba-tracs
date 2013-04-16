<?php session_start();
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendtrans(duration=1)">
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
<script type="text/javascript" src="Scripts/img.js"></script>
<script type="text/javascript">
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

/*
function sumar_cuentas_d(id){
	var debito = document.getElementById('debito'+id).value;
	var suma = document.getElementById('suma_debito').value;
	if(debito != ""){
		document.getElementById('suma_debito').value = parseInt(suma) + parseInt(debito);	
	}else{
		document.getElementById('suma_debito').value = parseInt(suma) + parseInt(0);	
	}

}
*/

	
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
	
	MM_openBrWindow('agregar_tercero2.php','AgregarTercero','scrollbars=yes,width=970px,height=400px');
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
<form id="form1" name="form1" method="post" action="php/action/addMovimiento.php" onsubmit="return validar()">

<table width="945" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="422" height="50" align="center" valign="middle" bgcolor="#ADB1CB"><table width="500" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="256" class="titulos" align="center">Agregar Comprobante de diario</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" valign="middle" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="35" valign="middle" align="center"><table width="950" border="0" align="center" cellpadding="0" cellspacing="2">
      <tr>
        <td width="713" height="90" align="left" valign="middle" bgcolor="#E6CCCD" class="texto_azul"><table width="720" border="0" cellpadding="0" cellspacing="3">
          <tr>
            <td width="331"><span class="texto_azul2"><strong>&nbsp;Movimiento <input name="num_movi" id="num_movi" type="hidden" value="<?php if(count($movimiento) == 0){ echo count($movimiento) + 1; }else{ echo count($movimiento) + 1; }  ?>" /> <?php if(count($movimiento) == 0){ echo count($movimiento) + 1; }else{ echo count($movimiento) + 1; }  ?></strong></span><strong> - </strong>
             <input type="text" name="fecha" class="inputDate textarea_redondo2" id="inputDate" style="width:65px;" value="<?php echo date('d/m/Y'); ?>" readonly="readonly" />
               </td>
            <td width="326" valign="middle"><strong>&nbsp;Nombre de tercero:</strong>&nbsp;<input name="tercero" type="text" class="textarea_redondo2" id="tercero" style="width:180px;" onblur="javascript:dato_tercero()"/><div id="ter"></div></td>
            <td width="51" valign="middle"><div id="ter2"></div></td>
          </tr>
          <tr>
            <td colspan="3"><img src="images/line2.gif" width="700" height="1" /></td>
          </tr>
          <tr>
            <td colspan="3"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Concepto:</strong><span class="td_tabla_interna">
              <input name="concepto" type="text" class="textarea_redondo2" id="concepto" style="width:422px;"/>
              </span></td>
          </tr>
        </table></td>
        <td align="left" valign="middle" bgcolor="#D9B0B3" class="texto_azul">
        
        &nbsp;
        <table width="220" border="0">
          <tr>
            <td width="166">&nbsp;<span class="texto_azul_peque">Documento</span>:
             <select name="documento" class="textarea_redondo2" id="documento" style="width:80px; height:27px;" onchange="numero_documento();">
            <option value="0">--</option>
            <?php foreach($documento as $item){ ?>
          		<option value="<?php echo $item->getId(); ?>"><?php echo $item->getNombredoc(); ?></option>
            <?php } ?>
            </select></td>
            <td width="55"><div id="num_d"></div></td>
          </tr>
        </table>        
                   
            
            
            </td>
        </tr>
      <tr>
        <td height="35" colspan="2" valign="top"><div id="cuentas"></div></td>
      </tr>
      
      
      
    </table></td>
  </tr>
  <tr>
    <td height="18" valign="middle" align="center"><img src="images/line2.gif" width="940" height="1" /></td>
  </tr>
  <tr>
    <td height="35" valign="top" align="center">
    <input style="width:90px;"name="Entrar" type="submit" class="boton_redondo" id="Entrar" value="::: Aceptar :::" />
    <input type="hidden" name="num_movimiento" id="num_movimiento" value="<?php if(count($movimiento) == 0){ echo count($movimiento) + 1; }else{ echo count($movimiento); }  ?>" />
</td>
  </tr>
</table>
</form>
</body>
</html>
