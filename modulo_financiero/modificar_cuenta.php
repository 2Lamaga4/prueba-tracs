<?php include "php/include_dao.php";

$CuentaDAO = new CuentaDAO();
$cuenta = new cuentas();
$cuentas = $CuentaDAO->getList(1);
$Idcuentas = $CuentaDAO->get($_REQUEST['id']);

$datos = substr($Idcuentas->getCuenta(),0,8);
error_reporting (0);
$nm = 0;

if($_REQUEST['nm'] != ""){
	$nm = $_REQUEST['nm'];
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendtrans(duration=1)">
<title>Cassius - software de propiedad horizontal</title>
<link href="config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Scripts/codigo.js"></script>
<script type="text/javascript">
  

function grupo(){
	var clase = document.getElementById('clase').value;
	llamarasincrono('combo_grupo.php?id=<?php echo $_REQUEST['id']; ?>&clase='+clase, 'grupo_combo');
	cuenta2();
	subcuenta2();
}

function cuenta(){
	var grupo = document.getElementById('grupo').value;
	llamarasincrono('combo_cuenta.php?id=<?php echo $_REQUEST['id']; ?>&grupo='+grupo, 'cuenta_combo');
	subcuenta2();
}	


function cuenta2(){
	llamarasincrono('combo_cuenta.php?id=<?php echo $_REQUEST['id']; ?>', 'cuenta_combo');
}


function subcuenta(){
	var cuenta = document.getElementById('cuenta').value;
	llamarasincrono('combo_subcuenta.php?id=<?php echo $_REQUEST['id']; ?>&cuenta='+cuenta, 'subcuenta_combo');
}	


function subcuenta2(){
	llamarasincrono('combo_subcuenta.php?id=<?php echo $_REQUEST['id']; ?>', 'subcuenta_combo');
}

function numero(){
	var subcuenta = document.getElementById('subcuenta').value;
	llamarasincrono('auxiliar.php?id=<?php echo $_REQUEST['id']; ?>&numero='+subcuenta, 'numero');
}

function numero2(){
	llamarasincrono('auxiliar.php?id=<?php echo $_REQUEST['id']; ?>', 'numero');
}

function enviar(){
	var clase = document.getElementById('clase').value;
	if(clase > 0){
		var grupo = document.getElementById('grupo').value;
		var cuenta = document.getElementById('cuenta').value;
		var subcuenta = document.getElementById('subcuenta').value;
		var auxiliar = document.getElementById('auxiliar').value;
		var denominacion = document.getElementById('denominacion').value;
		var descripcion_vivienda = document.getElementById('descripcion_vivienda').value;
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
		location.href = "php/action/editCuenta.php?id=<?php echo $_REQUEST['id']; ?>&subcuenta="+subcuenta+"&auxiliar="+auxiliar+"&denominacion="+denominacion+"&descripcion_vivienda="+descripcion_vivienda;
	}
}



</script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function cerrarVentana(){ 
alert('La Cuenta se ha modificado con exito.');
 window.opener.location.href = window.opener.location.href; 
	//window.opener.document.forms[0].submit();



  if (window.opener.progressWindow) 
		
 { 
	//var id = 1;
    window.opener.progressWindow.close()
  } 
  
  window.close(); 
}
</script>
<style type="text/css">
#agregar_grupo {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 20px;
	top: 153px;
}
#agregar_cuenta {
	position:absolute;
	width:200px;
	height:115px;
	z-index:2;
	left: 25px;
	top: 195px;
}
#agregar_subcuenta {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
	left: 25px;
	top: 233px;
}
</style>
</head>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
</head>

<body  onload="subcuenta2(); cuenta2(); grupo(); numero2()"  class="popup" OnContextMenu="return false">


<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="422" height="50" align="center" valign="middle" bgcolor="#ADB1CB"><table width="289" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="289" class="titulos" align="center">Modificar Nueva Cuenta</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" valign="middle" align="center"></td>
  </tr>
  <tr>
    <td height="35" valign="middle" align="center"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="797" height="40" class="td_nivel1"><table width="500" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="79"><strong>Clase: </strong></td>
            <td width="701"><span class="texto_azul">
              <select name="clase" id="clase" class="textarea_redondo2" style="width:407px; height:27px;" onchange="grupo()">
                <option value="0">--</option>
                <?php foreach($cuentas as $item){ 
						$sel = "";
						if($datos[0] == $item->getCuenta()){
							$sel = "selected";
						}
				?>
               		 <option value="<?php echo $item->getCuenta(); ?>" <?php echo $sel; ?>><?php echo $item->getCuenta()." ".$item->getDenominacion(); ?></option>
                <?php } ?>
              </select>
            </span></td>
          </tr>
        </table></td>
      </tr>
       <?php if($nm == 0 || $nm == 1 || $nm == 2 || $nm == 3){ ?>  
      <tr>
        <td height="40" class="td_nivel2"><table width="500" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><div id="grupo_combo"></div></td>
            </tr>
        </table></td>
      </tr>
      <?php } ?> 
      <tr>
        <td height="20"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
            <?php if($nm == 0 || $nm == 3 || $nm == 2){ ?>  
          <tr>
            <td width="76" height="40" class="td_nivel3"><strong>Cuenta: </strong></td>
            <td width="694" class="td_nivel3"><div id="cuenta_combo"></div></td>
            </tr>
             <?php } ?> 
           <?php if($nm == 0 || $nm == 3){ ?>  
          <tr>
            <td height="40" class="td_nivel4"><strong>Subcuenta: </strong></td>
            <td height="20" class="td_nivel4"><div id="subcuenta_combo"></div></td>
            </tr>
          <?php } ?>  
         <?php if($nm == 0){ ?>   
          <tr>
            <td colspan="2"><table width="470" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr class="tr_tabla_interna">
                <td width="70" height="40" class="td_tabla_interna"><strong>Auxiliar:</strong></td>
                <td width="71" class="td_tabla_interna"><div id="numero"></div></td>
                <td width="118" class="td_tabla_interna"><input name="auxiliar" type="text" class="textarea_redondo2" id="auxiliar" style="width:80px;" value="<?php echo $datos[6].$datos[7]; ?>" /><span class="hint4">Número de cuenta auxiliar<span class="hint-pointer4">&nbsp;</span></span></td>
                <td width="201"><span class="td_tabla_interna">
                  <input name="denominacion" type="text" class="textarea_redondo2" id="denominacion" style="width:150px;" value="<?php echo $Idcuentas->getDenominacion(); ?>"/>
                </span>

                  <span class="td_tabla_interna"></span></td>
                </tr>
              <tr class="tr_tabla_interna">
                <td height="40" colspan="4" class="td_tabla_interna">Descripción de cuenta auxiliar:</td>
                </tr>
              <tr class="tr_tabla_interna">
                <td height="80" colspan="4" class="td_tabla_interna" align="center"><textarea name="descripcion_vivienda" cols="45" rows="5" class="textarea_redondo2" id="descripcion_vivienda" style="width:400px; height:57px"><?php echo $Idcuentas->getDescripcion(); ?></textarea></td>
                </tr>
              </table></td>
          </tr>
          <?php } ?>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="18" valign="middle" align="center"><img src="images/line2.gif" width="550" height="1" /></td>
  </tr>
  <tr>
    <td height="35" valign="top" align="center"><input style="width:90px;" name="Entrar" type="button" class="boton_redondo" id="Entrar" value="::: Aceptar :::" onclick="enviar();"/></td>
  </tr>
</table>

<div id="agregar_grupo"></div>

<div id="agregar_cuenta"></div>

<div id="agregar_subcuenta"></div>


</body>
</html>
