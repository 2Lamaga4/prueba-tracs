<?php session_start();
include "php/include_dao.php";

if(isset($_SESSION['datos'])){
session_unset($_SESSION['datos']);}

if(isset($_SESSION['sigla_d'])){
session_unset($_SESSION['sigla_d']);}

if(isset($_SESSION['nombre_d'])){
session_unset($_SESSION['nombre_d']);}

if(isset($_SESSION['descripcion_d'])){
session_unset($_SESSION['descripcion_d']);}

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

}function OK(){
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

<body class="interna2" OnContextMenu="return false" <?php if(isset($_GET['OK_de'])){if($_GET['OK_de'] == 1){?>onload="OK()"<?php }} ?> <?php if(isset($_GET['OK_de'])){if($_GET['OK_de'] == 2){?>onload="OK2()"<?php }} ?>>
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
