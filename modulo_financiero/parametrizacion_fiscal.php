<?php include "php/include_dao.php";

$FuncionariosDAO = new FuncionariosDAO();
$funcionarios = new funcionarios();
$funcionario = $FuncionariosDAO->get(3);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendtrans(duration=1)">
<title>Cassius - software de propiedad horizontal</title>
<link href="config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
<style type="text/css">
#subtitulo {
	position:absolute;
	left:50%;
	top:95px;
	width:536px;
	height:35px;
	z-index:8;
	margin-left:-190px;
}
</style>
</head>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
<script type="text/javascript">

function validar(){

	var nombre = document.getElementById('nombre').value;
	if(nombre == ""){
		alert('Digite los Nombres del Revisor Fiscal.');
		document.getElementById('nombre').focus();
		return false;
	}
	
	var apellido = document.getElementById('apellido').value;
	if(apellido == ""){
		alert('Digite los Apellidos del Revisor Fiscal.');
		document.getElementById('apellido').focus();
		return false;
	}
	
	var documento = document.getElementById('documento').value;
	if(documento == 0){
		alert('Seleccione un Tipo de celula.');
		document.getElementById('documento').focus();
		return false;
	}
	 
	var cedula = document.getElementById('cedula').value;
	if(cedula == ""){
		alert('Digite la Cedula del Revisor Fiscal.');
		document.getElementById('cedula').focus();
		return false;
	} 
	
	var rut = document.getElementById('rut').value;
	if(rut == ""){
		alert('Digite el Rut/Nit del Revisor Fiscal');
		document.getElementById('rut').focus();
		return false;
	} 
	  
	var telefono = document.getElementById('telefono').value;
	if(telefono == ""){
		alert('Digite el Telefono del Revisor Fiscal.');
		document.getElementById('telefono').focus();
		return false;
	}
	
	var celular = document.getElementById('celular').value;
	if(celular == ""){
		alert('Digite el Celular del Revisor Fiscal.');
		document.getElementById('celular').focus();
		return false;
	}
	 
	var direccion = document.getElementById('direccion').value;
	if(direccion == ""){
		alert('Digite la Direccion del Revisor Fiscal.');
		document.getElementById('direccion').focus();
		return false;
	}
	
}

function OK2(){
	alert('Revisor Fiscal modificado con exito.');
}


</script>
</head>

<body class="interna2" OnContextMenu="return false" <?php if($_GET['OK'] == 2){?>onload="OK2()"<?php } ?>>
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='contabilidad_home.html'"/>
</div>
<div id="logo_small3"><img src="images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad"></div>
<div id="contenido_tabla">
<form id="form1" name="form1" method="post" action="php/action/actualizarFuncionario.php" onsubmit="return validar();">
  <table width="850" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td height="40">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="400" height="40"><table width="390" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Nombres:</strong></td>
          <td width="241"><input name="nombre" type="text" class="textarea_redondo2" id="nombre" style="width:200px;" value="<?php echo $funcionario->getNombres(); ?>" />
            </td>
        </tr>
      </table></td>
      <td width="400"><table width="340" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Apellidos:</strong></td>
          <td width="191"><input name="apellido" type="text" class="textarea_redondo2" id="apellido" style="width:200px;" value="<?php echo $funcionario->getApellidos(); ?>" />
            </td>
        </tr>
      </table></td>
    </tr>
    
    <tr>
      <td height="40"><table width="390" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Tipo Cédula:</strong></td>
          <td width="241" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<select name="documento" class="textarea_redondo2" id="documento" style="width:122px; height:27px;">
            <option value="0">--</option>
            <option value="1" <?php if($funcionario->getTipodocumento() == 1){ ?>selected="selected"<?php } ?>>CC</option>
            <option value="2" <?php if($funcionario->getTipodocumento() == 2){ ?>selected="selected"<?php } ?>>CC Extranjero</option>
          </select>
            </td>
        </tr>
      </table></td>
      <td><table width="340" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Cédula:</strong></td>
          <td width="191"><input name="cedula" type="text" class="textarea_redondo2" id="cedula" style="width:200px;" value="<?php echo $funcionario->getNodocumento(); ?>" />
            </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="40"><table width="390" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Rut/Nit:</strong></td>
          <td width="241"><input name="rut" type="text" class="textarea_redondo2" id="rut" style="width:200px;" value="<?php echo $funcionario->getRutnit(); ?>" />
            </td>
        </tr>
      </table></td>
      <td><table width="340" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Teléfono fijo:</strong></td>
          <td width="191"><input name="telefono" type="text" class="textarea_redondo2" id="telefono" style="width:200px;" value="<?php echo $funcionario->getTelefono(); ?>" />
            </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="40"><table width="390" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Celular:</strong></td>
          <td width="241"><input name="celular" type="text" class="textarea_redondo2" id="celular" style="width:200px;" value="<?php echo $funcionario->getCelular(); ?>" />
            </td>
        </tr>
      </table></td>
      <td><table width="340" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Dirección:</strong></td>
          <td width="191"><input name="direccion" type="text" class="textarea_redondo2" id="direccion" style="width:200px;" value="<?php echo $funcionario->getDireccion(); ?>" />
            </td>
        </tr>
      </table></td>
    </tr>
    
    <tr>
      <td height="40">    </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="20" colspan="2"><img src="images/line2.gif" width="850" height="1" /></td>
    </tr>
    <tr>
      <td height="40" colspan="2" align="center"><input name="agregar_propietario" type="submit" class="boton_general" style="width:160px" id="agregar_propietario" value="::: Guardar :::" />
        <input type="hidden" name="id" id="id" value="<?php echo $funcionario->getId(); ?>" />
        <input type="hidden" name="cargo" id="cargo" value="<?php echo $funcionario->getCargo(); ?>" />
        <input type="hidden" name="url" id="url" value="parametrizacion_fiscal" />
        </td>
        
        
    </tr>
  </table>
  </form>
</div>


<div class="titulos" id="subtitulo">&gt;Parametrización Revisor Fiscal</div>
</body>
</html>
