<?php session_start();
include "php/include_dao.php";

$CuentaDAO = new CuentaDAO();
$cuenta = new cuentas();
$cuentasN5 = $CuentaDAO->getList(5);

$DocumentoDAO = new DocumentoDAO();
$documento = new documentos();
$doc = $DocumentoDAO->get($_REQUEST['id']);

$AfectaDAO = new AfectaDAO();
$afecta = new afecta();
$afe = $AfectaDAO->getList($_REQUEST['id']);

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
function MM_openBrWindow(theURL,winName,features) { //v2.0
  ventana=window.open(theURL,winName,features);
  alto=screen.height;
  ancho=screen.width;
  yposi=(alto-540)/2;
  xposi=(ancho-850)/2;
  ventana.moveTo(xposi,yposi);
}
function agregar_r(){
	var sigla = document.getElementById('sigla').value;
	var nombre = document.getElementById('nombre').value;
    var descripcion = document.getElementById('descripcion').value;
	
	MM_openBrWindow('modificar_cuenta_afecta.php?id=<?php echo $_REQUEST['id']; ?>&sigla='+sigla+'&nombre='+nombre+'&descripcion='+descripcion,'AgregarPropietario','scrollbars=yes,width=1050px,height=540px')
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

<body class="interna2" OnContextMenu="return false">
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='parametrizacion_documentos.php'"/>
</div>
<div id="logo_small3"><img src="images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad"></div>
<div id="contenido_tabla">
<form id="form1" name="form1" method="post" action="php/action/editDocumento.php">


  <table width="850" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td height="30">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="273" height="40" bgcolor="#CCCCCC" class="tr_tabla_interna2"><table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="101" class="texto_azul" align="left"><strong>Sigla:</strong></td>
          <td width="99"><input name="sigla" type="text" class="textarea_redondo2" id="sigla" style="width:50px;" value="<?php echo $doc->getSigla();  ?>" /></td>
        </tr>
      </table></td>

      <td width="576" bgcolor="#CCCCCC" class="tr_tabla_interna2"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="76" class="texto_azul" align="left"><strong>Nombre:</strong></td>
          <td width="474"><input name="nombre" type="text" class="textarea_redondo2" id="nombre" style="width:385px;" value="<?php  echo $doc->getNombredoc();  ?>" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="2" class="tr_tabla_interna2"><table width="777" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="102" class="texto_azul" align="left"><strong>Descripción:</strong></td>
          <td width="675"><textarea name="descripcion" cols="45" rows="5" class="textarea_redondo2" id="descripcion" style="width:625px; height:40px"><?php echo $doc->getDescripcion();?></textarea></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="2"><img src="images/line2.gif" width="850" height="1" /></td>
    </tr>
    <tr>
      <td height="30" colspan="2" align="center"><table width="840" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr>
          <td height="30" align="center" valign="middle" bgcolor="#E6CCCD" class="texto_azul"><strong>Cuentas a las que afecta:</strong></td>
          <td align="center"><table width="200" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
              <td><input name="agregar_residente" style="width:160px" type="button" class="boton_agregar" id="agregar_residente" value="Agregar cuenta" onclick="agregar_r();"/></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td width="634" height="35" valign="top"><table width="630" border="0" align="center" cellpadding="0" cellspacing="2">
           <?php 
           if(isset($_SESSION['datos'])){
           if(count($_SESSION['datos']) > 0){
		   for($i = 0; $i < count($_SESSION['datos']); $i++){ 
		   		$cuentasN5 = $CuentaDAO->get($_SESSION['datos'][$i]);
		   		if(count($cuentasN5) > 0){	
		   ?>
                <tr class="tr_tabla_interna">
                  <td width="80" class="td_tabla_interna"><?php echo $cuentasN5->getCuenta(); ?></td>
                  <td width="377" class="td_tabla_interna"><?php echo $cuentasN5->getDenominacion(); ?></td>
                  <td width="76" class="td_tabla_interna"><?php echo $_SESSION['tipo'][$i]; ?></td>
                  <td width="87"><input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int2" value="Eliminar" onclick="location.href='eliminar_afecta.php?id=<?php echo $i; ?>&m=1&id_d=<?php echo $_REQUEST['id']; ?>'"/></td>
                </tr>
           <?php }}
		   } 
		   }else{
		  		foreach($afe as $item){
		   		$cuentasN5 = $CuentaDAO->get($item->getIdpuc());
		   		if(count($cuentasN5) > 0){	
		   ?>
                <tr class="tr_tabla_interna">
                  <td width="80" class="td_tabla_interna"><?php echo $cuentasN5->getCuenta(); ?></td>
                  <td width="377" class="td_tabla_interna"><?php echo $cuentasN5->getDenominacion(); ?></td>
                  <td width="76" class="td_tabla_interna"><?php echo $item->getTipo(); ?></td>
                  <td width="87"><input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int2" value="Eliminar" onclick="location.href='eliminar_afecta2.php?id=<?php echo $item->getId(); ?>&id2=<?php echo $_REQUEST['id']; ?>&m=1&id_d=<?php echo $_REQUEST['id']; ?>'"/></td>
                </tr>
           <?php }
		   } 
		   ?>
			
			<?php } ?>
          </table></td>
          <td width="200" align="center" valign="top">&nbsp;</td>
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
  <h1>&nbsp;</h1>
  </form>
</div>

<div class="titulos" id="subtitulo">&gt; Modificar Documento</div>
</body>
</html>
