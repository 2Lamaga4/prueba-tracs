<?php session_start();
include "php/include_dao.php";


$TercerosDAO = new TercerosDAO();
$terceros = new terceros();
$tercero = $TercerosDAO->get($_REQUEST['id']);



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
	llamarasincrono('validar_tercero2.php?num=<?php echo $tercero->getNodocumento(); ?>', 'nom_tercero');
}


function validar_existe(){
	var numero = document.getElementById('numero').value;
	if(<?php echo $tercero->getNodocumento(); ?> == numero){
		llamarasincrono('validar_tercero2.php?num=<?php echo $tercero->getNodocumento(); ?>', 'nom_tercero');
	}else{
		llamarasincrono('validar_tercero2.php?numero='+numero, 'nom_tercero');
	}
}


</script>
<style type="text/css">
#subtitulo {
	position:absolute;
	left:50%;
	top:95px;
	width:431px;
	height:35px;
	z-index:8;
	margin-left:-190px;
}
</style>
</head>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
</head>

<body class="interna2" OnContextMenu="return false" onload="validar_tercero();">
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='terceros.php'"/>
</div>
<div id="logo_small3"><img src="images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad"></div>
<div id="contenido_tabla">
<form id="form1" name="form1" method="post" action="php/action/editTerceros.php" onsubmit="return validar();">
  <table width="850" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td width="435" height="30">&nbsp;</td>
      <td width="414">&nbsp;</td>
    </tr>
    <tr>
      <td height="40" bgcolor="#CCCCCC" class="tr_tabla_interna2"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="137" class="texto_azul" align="left"><strong>Tipo de documento:</strong></td>
          <td width="163"><select name="documento" class="textarea_redondo2" id="documento" style="width:122px; height:27px;">
            <option value="0">--</option>
            <option value="1" <?php if($tercero->getTipodocumento() == 1){ ?>selected="selected"<?php } ?> >CC</option>
            <option value="2" <?php if($tercero->getTipodocumento() == 2){ ?>selected="selected"<?php } ?> >CC Extranjero</option>
          </select>
           </td>
        </tr>
      </table></td>
      <td bgcolor="#CCCCCC" class="tr_tabla_interna2"><div id="nom_tercero"></div></td>
    </tr>
    <tr>
      <td height="40" colspan="2" bgcolor="#CCCCCC" class="tr_tabla_interna2"><table width="715" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="136" class="texto_azul" align="left"><strong>Nombre:</strong></td>
          <td width="579"><input name="nombre" type="text" class="textarea_redondo2" id="nombre" style="width:565px;" value="<?php echo $tercero->getNombretercero(); ?>" />
            </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="40" bgcolor="#CCCCCC" class="tr_tabla_interna2"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="137" class="texto_azul" align="left"><strong>Teléfono:</strong></td>
          <td width="163"><input name="telefono" type="text" class="textarea_redondo2" id="telefono" style="width:110px;" value="<?php echo $tercero->getTelefono(); ?>" />
           </td>
        </tr>
      </table></td>
      <td bgcolor="#CCCCCC" class="tr_tabla_interna2"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="74" class="texto_azul" align="left"><strong>Dirección:</strong></td>
          <td width="226"><input name="direccion" type="text" class="textarea_redondo2" id="direccion" style="width:200px;" value="<?php echo $tercero->getDireccion(); ?>" />
          </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="40" class="tr_tabla_interna2"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="137" class="texto_azul" align="left"><strong>Correo:</strong></td>
          <td width="163"><input name="correo" type="text" class="textarea_redondo2" id="correo" style="width:110px;" value="<?php echo $tercero->getEmail(); ?>" />
           </td>
        </tr>
      </table></td>
      <td height="40" class="tr_tabla_interna2"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="74" class="texto_azul" align="left"><strong>Régimen:</strong></td>
          <td width="226"><select name="regimen" class="textarea_redondo2" id="regimen" style="width:212px; height:27px;">
            <option value="0">--</option>
            <option value="1" <?php if($tercero->getRegimen() == 1){ ?>selected="selected"<?php } ?> >Simplificado</option>
            <option value="2" <?php if($tercero->getRegimen() == 2){ ?>selected="selected"<?php } ?> >Común</option>
            <option value="3" <?php if($tercero->getRegimen() == 3){ ?>selected="selected"<?php } ?> >Gran contribuyente</option>
          </select>
           </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="40" colspan="2" align="center"><img src="images/line2.gif" width="850" height="1" /></td>
    </tr>
    <tr>
      <td height="40" colspan="2" align="center"><input name="agregar_propietario" type="submit" class="boton_general" style="width:160px" id="agregar_propietario" value="::: Aceptar :::" />
        <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>" /></td>
    </tr>
    <tr>
      <td height="40" colspan="2" align="center">&nbsp;</td>
    </tr>
  </table>
  
  </form>

</div>
<div class="titulos" id="subtitulo">&gt; Modificar Tercero</div>
</body>
</html>
