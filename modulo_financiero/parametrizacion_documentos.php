<?php session_start();
include "php/include_dao.php";

session_unset($_SESSION['datos']);
session_unset($_SESSION['sigla_d']);
session_unset($_SESSION['nombre_d']);
session_unset($_SESSION['descripcion_d']);

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
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function borrar(id){
	if (confirm('¿Estas seguro que desea borrar este Documento?')){ 
      location.href = "php/action/deleteDocumento.php?id="+id;
    } 
	
	
}

function OK(){
	alert('Documento borrada con exito.');
}
function OK2(){
	alert('Documento modificado con exito.');
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

<body class="interna2" OnContextMenu="return false" <?php if($_GET['OK_de'] == 1){?>onload="OK()"<?php } ?> <?php if($_GET['OK_de'] == 2){?>onload="OK2()"<?php } ?>>
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='contabilidad_home.html'"/>
</div>
<div id="logo_small3"><img src="images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad">
  <div id="utilidades">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="97%" align="right"><input name="agregar" type="button" class="boton_agregar" id="agregar" value="Agregar" onclick="location.href='agregar_documento.php?d=1'"/>
          &nbsp;</td>
        <td width="3%">&nbsp;</td>
      </tr>
    </table>
  </div>
</div>
<div id="contenido_tabla">
  <table width="720" border="0" align="center" cellpadding="0" cellspacing="2">
     <?php foreach($documento as $item){ ?>
        <tr class="tr_tabla_interna">
          <td width="74" class="td_tabla_interna"><?php echo $item->getSigla(); ?></td>
          <td width="441" class="td_tabla_interna"><?php echo $item->getNombredoc(); ?></td>
          <td width="87"><input name="modificar_int" type="button" class="boton_modificar_int" id="modificar_int" value="Modificar" onclick="location.href='modificar_documento.php?id=<?php echo $item->getId(); ?>'"/></td>
          <td width="88"><input name="eliminar_int" type="button" class="boton_eliminar_int" id="eliminar_int" value="Eliminar" onclick="borrar(<?php echo $item->getId(); ?>)" /></td>
        </tr>
   <?php } ?>
  </table>
</div>
<div class="titulos" id="subtitulo">&gt; Parametrización Documentos</div>
</body>
</html>
