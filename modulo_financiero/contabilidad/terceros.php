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
<link href="../config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link href="css/styleterceros.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function OK(){
	alert('Tercero creado con exito.');


function OK2(){
	alert('Tercero modificado con exito.');
}

function OK3(){
	alert('Tercero eliminado con exito.');
}

function borrar(id){
	if (confirm('¿Estas seguro que desea borrar este Tercero?')){ 
      location.href = "php/action/deleteTerceros.php?id="+id;
    } 
}

</script>
</head>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
</head>

<body class="interna2" OnContextMenu="return false"  <?php if($_GET['OK'] == 1){?>onload="OK()"<?php } ?> <?php if($_GET['OK'] == 2){?>onload="OK2()"<?php } ?> <?php if($_GET['OK'] == 3){?>onload="OK3()"<?php } ?>>
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='contabilidad_home.php'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad">
  <div id="utilidades">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="97%" align="right"><input name="agregar" type="button" class="boton_agregar" id="agregar" value="Agregar" onclick="location.href='agregar_tercero.php'"/>
          &nbsp;</td>
        <td width="3%">&nbsp;</td>
      </tr>
    </table>
  </div>
</div>
<div id="contenido_tabla">
  <table width="780" border="0" align="center" cellpadding="0" cellspacing="2">
      <tr class="tr_tabla_interna">
          <td width="145" class="td_tabla_interna">1</td>
          <td width="451" class="td_tabla_interna">2</td>
          <td width="87">3<input name="modificar_int" type="button" class="boton_modificar_int" id="modificar_int" value="Modificar" onclick="location.href='modificar_tercero.php?id='"/></td>
          <td width="87">4<input name="eliminar_int" type="button" class="boton_eliminar_int" id="eliminar_int" value="Eliminar" onclick="//borrar(<?php echo $item->getId(); ?>)" /></td>
        </tr>
  </table>
</div>
<div class="titulos" id="subtitulo">&gt; Parametrización Terceros</div>
</body>
</html>
