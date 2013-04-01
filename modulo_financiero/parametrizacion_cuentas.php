<?php include "php/include_dao.php";

$CuentaDAO = new CuentaDAO();
$cuenta = new cuentas();
$cuentas = $CuentaDAO->getList(1);

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
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  ventana=window.open(theURL,winName,features);
  alto=screen.height;
  ancho=screen.width;
  yposi=(alto-550)/2;
  xposi=(ancho-560)/2;
  ventana.moveTo(xposi,yposi);
}

function borrar(id){
	if (confirm('¿Estas seguro que desea borrar esta cuenta?')){ 
      location.href = "php/action/deleteCuenta.php?id="+id;
    } 
}


</script>
<style type="text/css">
#subtitulo {	
position:absolute;
	left:50%;
	top:95px;
	width:350px;
	height:35px;
	z-index:8;
	margin-left:-190px;
}
</style>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js' type='text/javascript'/></script>
<script type='text/javascript'>
//<![CDATA[

$(document).ready(function(){
  $("#accordion div").hide();
  $("#accordion h3").click(function(){
    $(this).next("div").slideToggle("slow")
    .siblings("div:visible").slideUp("slow");
    $(this).toggleClass("active");
    $(this).siblings("h3").removeClass("active");
  });
});

//]]>
</script>
<style>
  #accordion { /* el rectángulo contenedor */
    width:867px;
  }
  #accordion h3 { /* los enlaces que despliegan y contraen el contenido */
    background-color: #FFF;
    color: #FFF;
    cursor: pointer;
    font-family: Tahoma;
    font-size: 17px;
    font-weight: normal;
    height: 1.7em;
    line-height: 1.7em;
    margin: 0 0 2px;
    padding: 0 60px;
    position: relative;
  }

  #accordion h3 span { /* una imagen que permuta segñun el estado del contenido */
    background: transparent url(images/masmenos.png) no-repeat right top;
    display: block;
    height: 16px;
    position: absolute;
    right: 20px;
    top: 7px;
    width: 25px;
  }
  #accordion h3.active span { /* desplegado */
    background-position: right bottom;
  }
  #accordion div { /* el contenido */
    background-color: #FFF;
    border: 0px;
    color: #FFF;
    font-family: Georgia;
    font-size: 13px;
    line-height: 1.5;
    margin: 0px;
    padding: 0px 0px 0px 50px;
  }
</style>

</head>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
</head>

<body id="customAccordion" onload="OK()"  class="interna2" onload="MM_preloadImages('images/btn_menos_roll.jpg','images/btn_mas_roll.jpg')" OnContextMenu="return false">


<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='contabilidad_home.html'"/>
</div>
<div id="logo_small3"><img src="images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad">
  <div id="utilidades">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="97%" align="right"><input name="agregar" type="button" class="boton_agregar" id="agregar" value="Agregar" onclick="MM_openBrWindow('agregar_cuenta.php','AgregarCuenta','width=560px,height=550px,scrollbars=yes')"/>
          &nbsp;</td>
        <td width="3%">&nbsp;</td>
      </tr>
    </table>
  </div>
</div>
<div id="contenido_tabla2">

<div id="accordion">
  

  <!-- y seguimos agregando elementos enlace + contenido -->

<?php foreach($cuentas as $item){ 

	$cuentasN2 = $CuentaDAO->Lista_Nivel($item->getCuenta(),2);
?>
	<h3>  <span></span>
  <table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                  <td width="797" height="30" class="td_nivel1"><table width="780" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>&nbsp;<strong><?php echo $item->getCuenta()." ".$item->getDenominacion(); ?></strong></td>
                      <td width="20">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
      </table>  
      </h3>    
      <div> 
      
	<table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
   <?php foreach($cuentasN2 as $item2){ 
   		$cuentasN3 = $CuentaDAO->Lista_Nivel($item2->getCuenta(),3);
   ?> 
    <tr>
      <td height="25" class="td_nivel2">
 
   
      <table width="770" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="563"><strong><?php echo $item2->getCuenta()." ".$item2->getDenominacion(); ?></strong></td>
           <td width="90"><input name="modificar_int2" type="button" class="boton_modificar_int" id="modificar_int3" value="Modificar" onclick="MM_openBrWindow('modificar_cuenta.php?id=<?php echo $item2->getId(); ?>&nm=1&cuenta=1','ModificarCuenta','width=560px,height=550px,scrollbars=yes')"/></td>
            <td width="90"><input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int3" value="Eliminar" onclick="borrar(<?php echo $item2->getId(); ?>)"/></td>
          <td width="30"></td>
        </tr>
      </table>
             
     

      
      </td>
    </tr>

			 <?php foreach($cuentasN3 as $item3){ 
                $cuentasN4 = $CuentaDAO->Lista_Nivel($item3->getCuenta(),4);
          	 ?>
                    <tr>
                      <td height="20"><table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="566" height="20" class="td_nivel3">
                          
                          <table width="727" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="558"><strong><?php echo $item3->getCuenta(); ?></strong> <?php echo $item3->getDenominacion(); ?></td>
                              <td width="89"><input name="modificar_int2" type="button" class="boton_modificar_int" id="modificar_int3" value="Modificar" onclick="MM_openBrWindow('modificar_cuenta.php?id=<?php echo $item3->getId(); ?>&nm=2cuenta=null','ModificarCuenta','width=560px,height=550px,scrollbars=yes')"/></td>
                              <td width="88"><input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int3" value="Eliminar" onclick="borrar(<?php echo $item3->getId(); ?>)"/></td>
                            </tr>
                          </table>
                           </td>
                        </tr>
                       
                       <?php
					    foreach($cuentasN4 as $item4){ 
							$cuentasN5 = $CuentaDAO->Lista_Nivel($item4->getCuenta(),5);
						?>
                            <tr>
                              <td height="20" class="td_nivel4">
                              <table width="720" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="551"> <strong><?php echo $item4->getCuenta(); ?></strong> <?php echo $item4->getDenominacion(); ?></td>
                                  <td width="89"><input name="modificar_int2" type="button" class="boton_modificar_int" id="modificar_int3" value="Modificar" onclick="MM_openBrWindow('modificar_cuenta.php?id=<?php echo $item4->getId(); ?>&nm=3','ModificarCuenta','width=560px,height=550px,scrollbars=yes')"/></td>
                                  <td width="88"><input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int3" value="Eliminar" onclick="borrar(<?php echo $item4->getId(); ?>)"/></td>
                                </tr>
                              </table>
                              
                              </td>
                            </tr>
							   <?php foreach($cuentasN5 as $item5){  $cont++; ?>
                                    <tr>
                                      <td colspan="2"><table width="720" border="0" align="center" cellpadding="0" cellspacing="2">
                                        <tr class="tr_tabla_interna">
                                          <td width="74" class="td_tabla_interna"><?php echo $item5->getCuenta(); ?></td>
                                          <td width="441" class="td_tabla_interna"><?php echo $item5->getDenominacion(); ?></td>
                                          <td width="87"><input name="modificar_int2" type="button" class="boton_modificar_int" id="modificar_int3" value="Modificar" onclick="MM_openBrWindow('modificar_cuenta.php?id=<?php echo $item5->getId(); ?>&nm=null','ModificarCuenta','width=560px,height=550px,scrollbars=yes')"/></td>
                                          <td width="88"><input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int3" value="Eliminar" onclick="borrar(<?php echo $item5->getId(); ?>)"/></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                               <?php } ?>
                      <?php } ?>
                        
                      </table></td>
                    </tr>
            
            <?php } ?>
             
     <?php } ?>
  
     

  </table>
  </div>
<?php } ?> 
 </div>
 </div>
<div class="titulos" id="subtitulo">&gt; Parametrización Cuentas</div>
</body>
</html>
