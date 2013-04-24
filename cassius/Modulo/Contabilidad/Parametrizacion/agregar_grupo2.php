<?php
include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet" />
<script src="../Scripts/codigo.js"></script>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 0;
	top: 0;
}
</style>

<script language="javascript">
function enviar(){
	var auxiliar = document.getElementById('auxiliar_g2').value;
	var denominacion = document.getElementById('denominacion_g2').value;
	var descripcion_vivienda = document.getElementById('descripcion_g2').value;

	if(auxiliar == ""){
		alert("Escriba un numero de cuenta.");
		document.getElementById('auxiliar_g2').focus();
		return false;
	}
	
	if(denominacion == ""){
		alert("Escriba una denominacion.");
		 document.getElementById('denominacion_g2').focus();
		 return false;
	}
	
	if(descripcion_vivienda == ""){
		alert("Escriba una Descripción de cuenta.");
		document.getElementById('descripcion_g2').focus();
		return false;
	}
}


function validar_auxiliar(){
	var aux = document.getElementById('auxiliar_g2').value;
	llamarasincrono('validar_auxiliar.php?aux='+aux+'&clase=<?php echo $_REQUEST['clase']; ?>&nivel=2', 'dato_aux');
}


</script>
</head>

<body>
<div id="apDiv1">
<form name="form1" id="form1" action="../php/action/addCuenta2.php" method="post" onsubmit="return enviar();">
	
	<table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="td_nivel2">
          <tr>
            <td width="109" height="30" class="texto_blanco"><strong>Nuevo grupo:</strong></td>
            <td width="34" class="td_tabla_interna"><?php echo $_REQUEST['clase']; ?></td>
            <td width="116" class="td_tabla_interna"><input name="auxiliar_g2" type="text" class="textarea_redondo2" id="auxiliar_g2" style="width:80px;" onblur="validar_auxiliar();" /></td>
            <td width="211"><span class="td_tabla_interna">
              <input name="denominacion_g2" type="text" class="textarea_redondo2" id="denominacion_g2" style="width:150px;"/>
            </span></td>
      </tr>
          <tr>
            <td height="30" colspan="4">Descripción de grupo:</td>
          </tr>
          <tr>
            <td height="80" colspan="4" align="center"><textarea name="descripcion_g2" cols="45" rows="5" class="textarea_redondo2" id="descripcion_g2" style="width:390px; height:57px"></textarea></td>
          </tr>
          <tr>
            <td height="50" colspan="4" align="center" valign="top"><input name="agregar" type="submit" class="boton_agregar" id="agregar" value="Agregar" onclick="MM_openBrWindow('agregar_cuenta.html','AgregarCuenta','scrollbars=yes,width=560px,height=550px')"/>
            <input type="hidden" name="cuenta" id="cuenta" value="<?php echo $_REQUEST['clase']; ?>" />
             <input type="hidden" name="nivel" id="nivel" value="2" /></td>
          </tr>
  </table>
</form> 
</div>
<div id="dato_aux"></div>
</body>
</html>