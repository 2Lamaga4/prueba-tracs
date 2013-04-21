<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../config/estilos_cassius.css" rel="stylesheet"/>
<script src="Scripts/codigo.js"></script>
<title></title>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 0;
	top: 2px;
}
</style>

<script language="javascript">


function enviar(){


	var auxiliar = document.getElementById('auxiliar_g4').value;
	var denominacion = document.getElementById('denominacion_g4').value;
	var descripcion_vivienda = document.getElementById('descripcion_g4').value;

	if(auxiliar == ""){
		alert("Escriba un numero de cuenta.");
		document.getElementById('auxiliar_g4').focus();
		return false;
	}
	
	if(denominacion == ""){
		alert("Escriba una denominacion.");
		 document.getElementById('denominacion_g4').focus();
		 return false;
	}
	
	if(descripcion_vivienda == ""){
		alert("Escriba una Descripción de cuenta.");
		document.getElementById('descripcion_g4').focus();
		return false;
	}
}


function validar_auxiliar(){
	var aux = document.getElementById('auxiliar_g4').value;
	llamarasincrono('validar_auxiliar.php?aux='+aux+'&clase=<?php echo $_REQUEST['clase']; ?>&nivel=4', 'dato_aux');
}


</script>
</head>

<body>
<div id="apDiv1">

<form name="form3" id="form3" action="../php/action/addCuenta2.php" method="post" onsubmit="return enviar();">
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="td_nivel4">
              <tr>
                <td width="135" height="30" class="texto_azul"><strong>Nueva subcuenta:</strong></td>
                <td width="36" class="td_tabla_interna"><?php echo $_REQUEST['clase']; ?></td>
                <td width="96" class="td_tabla_interna"><input name="auxiliar_g4" type="text" class="textarea_redondo2" id="auxiliar_g4" style="width:80px;"  onblur="validar_auxiliar();"/>
                  <span class="hint4">Número de subcuenta<span class="hint-pointer4">&nbsp;</span></span></td>
                <td width="203"><span class="td_tabla_interna">
                  <input name="denominacion_g4" type="text" class="textarea_redondo2" id="denominacion_g4" style="width:140px;"/>
                </span></td>
              </tr>
              <tr>
                <td height="30" colspan="4">Descripción de subcuenta:</td>
              </tr>
              <tr>
                <td height="80" colspan="4" align="center"><textarea name="descripcion_g4" cols="45" rows="5" class="textarea_redondo2" id="descripcion_g4" style="width:390px; height:57px"></textarea></td>
              </tr>
              <tr>
                <td height="50" colspan="4" align="center" valign="top"><input name="agregar3" type="submit" class="boton_agregar" id="agregar3" value="Agregar" onclick="MM_openBrWindow('agregar_cuenta.html','AgregarCuenta','scrollbars=yes,width=560px,height=550px')"/>
                <input type="hidden" name="cuenta" id="cuenta" value="<?php echo $_REQUEST['clase']; ?>" />
             <input type="hidden" name="nivel" id="nivel" value="4" />
                </td>
              </tr>
            </table>
</form>
 
</div>
<div id="dato_aux"></div>
</body>
</html>