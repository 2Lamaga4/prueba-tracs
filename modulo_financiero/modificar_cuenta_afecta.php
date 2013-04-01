<?php session_start();
include "php/include_dao.php";

$CuentaDAO = new CuentaDAO();
$cuenta = new cuentas();
$cuentas = $CuentaDAO->getList(1);

$AfectaDAO = new AfectaDAO();
$afecta = new afecta();




$_SESSION['sigla_d'] = $_REQUEST['sigla'];
$_SESSION['nombre_d'] = $_REQUEST['nombre'];
$_SESSION['descripcion_d'] = $_REQUEST['descripcion'];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendtrans(duration=1)">
<title>Cassius - software de propiedad horizontal</title>
<link href="config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link href="stylesheets/screen.css" type="text/css" rel="stylesheet" media="screen,projection" />
<!--[if lt IE 7]>
<link href="stylesheets/screen-ie6.css" type="text/css" rel="stylesheet" media="screen,projection" />
<![endif]-->
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jquery-scrollTo.js"></script>
<script type="text/javascript" src="scripts/accordion.js"></script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function cerrarVentana(){ 
	
 window.opener.location.href = window.opener.location.href; 
	//window.opener.document.forms[0].submit();



  if (window.opener.progressWindow) 
		
 { 
	//var id = 1;
    window.opener.progressWindow.close()
  } 
  
  window.close(); 
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

function validar(id,valor){
	
	var check = document.getElementById('principal1'+id).checked;
	var check2 = document.getElementById('principal2'+id).checked;
	
	if(check == true && valor == 1){
		document.getElementById('principal2'+id).checked = false;
		document.getElementById('principal1'+id).checked = true;
	}else if(check2 == true && valor == 2){
		document.getElementById('principal2'+id).checked = true;
		document.getElementById('principal1'+id).checked = false;
	}	
	

}


</script>
</head>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
</head>

<body class="popup" onload="MM_preloadImages('images/btn_menos_roll.jpg','images/btn_mas_roll.jpg')" OnContextMenu="return false">


<form name="form1" id="form1" action="agregar_documento2.php" method="post">
<table width="810" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="422" height="50" align="center" valign="middle" bgcolor="#ADB1CB"><table width="256" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="256" class="titulos" align="center">Agregar Cuenta</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="35" valign="middle" align="center">
    
    
<div style="overflow:auto; width:1000px;">

<ul id="accordion">
<?php $cont = 0;
foreach($cuentas as $item){ 

	$cuentasN2 = $CuentaDAO->Lista_Nivel($item->getCuenta(),2);
?>

		
			<li<?php if($section == '' || $section == 'recent'): ?> class="current"<?php endif; ?>>
				
                <a href="?section=recent" class="heading ">
                
                	<table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
                        <tr>
                          <td width="797" height="30"><table width="780" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td>&nbsp;<strong><?php echo $item->getCuenta()." ".$item->getDenominacion(); ?></strong></td>
                              <td width="20"></td>
                            </tr>
                          </table></td>
                        </tr>
                    </table>                
                </a>
				<ul id="recent">

  <table width="800" border="0" align="center" cellpadding="0" cellspacing="1">

   <?php foreach($cuentasN2 as $item2){ 
   		$cuentasN3 = $CuentaDAO->Lista_Nivel($item2->getCuenta(),3);
   ?>
    <tr>
      <td height="25" class="td_nivel2"><table width="770" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><strong><?php echo $item2->getCuenta()." ".$item2->getDenominacion(); ?></strong></td>
          <td width="20"><a href="#"><img src="images/btn_mas.jpg" name="btn_mas" width="25" height="17" border="1" id="btn_mas" onmouseover="MM_swapImage('btn_mas','','images/btn_mas_roll.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        </tr>
      </table></td>
    </tr>
			 <?php foreach($cuentasN3 as $item3){ 
                $cuentasN4 = $CuentaDAO->Lista_Nivel($item3->getCuenta(),4);
          	 ?>
                    <tr>
                      <td height="20"><table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="20" class="td_nivel3"><strong><?php echo $item3->getCuenta(); ?></strong> <?php echo $item3->getDenominacion(); ?></td>
                        </tr>
                       
                       <?php 
					   foreach($cuentasN4 as $item4){ 
							$cuentasN5 = $CuentaDAO->Lista_Nivel($item4->getCuenta(),5);
						?>
                            <tr>
                              <td height="20" class="td_nivel4"><strong><?php echo $item4->getCuenta(); ?></strong> <?php echo $item4->getDenominacion(); ?></td>
                            </tr>
							   <?php foreach($cuentasN5 as $item5){ 
							   		if(count($_SESSION['datos']) > 0){
										
										$sel = "";
										$sel2 = "";
										for($a = 0; $a < count($_SESSION['datos']); $a++){
											if(($_SESSION['datos'][$a] == $item5->getId()) && ($_SESSION['tipo'][$a] == "Débito")){
												$sel = "checked";
												$a = count($_SESSION['datos']) + 2; 
											}else{
												$sel = "";
											}
											
											if(($_SESSION['datos'][$a] == $item5->getId()) && ($_SESSION['tipo'][$a] == "Crédito")){
												$sel2 = "checked";
												$a = count($_SESSION['datos']) + 2; 
											}else{
												$sel2 = "";
											}
										}
										
										
										
							   ?>
                                    <tr>
                                      <td><table width="720" border="0" align="center" cellpadding="0" cellspacing="2">
                                        <tr class="tr_tabla_interna">
                                          <td width="74" class="td_tabla_interna"><?php echo $item5->getCuenta(); ?></td>
                                          <td width="441" class="td_tabla_interna"><?php echo $item5->getDenominacion(); ?></td>
                                          <td width="87">Débito<input name="principal1<?php echo $item5->getId(); ?>" type="checkbox" class="chekbox2" id="principal1<?php echo $item5->getId(); ?>" onclick="validar(<?php echo $item5->getId(); ?>,1);" value="<?php echo $item5->getId(); ?>" <?php echo $sel; ?> /></td>
                                          <td width="88">Crédito<input name="principal2<?php echo $item5->getId(); ?>" type="checkbox" class="chekbox2" id="principal2<?php echo $item5->getId(); ?>"  onclick="validar(<?php echo $item5->getId(); ?>,2);" value="<?php echo $item5->getId(); ?>" <?php echo $sel2; ?> /></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                               <?php  }else{
								   	
									$afectas = $AfectaDAO->getList2($item5->getId(),$_REQUEST['id']);
					
								     ?>
                               
                               			 <tr>
                                      <td><table width="720" border="0" align="center" cellpadding="0" cellspacing="2">
                                        <tr class="tr_tabla_interna">
                                          <td width="74" class="td_tabla_interna"><?php echo $item5->getCuenta(); ?></td>
                                          <td width="441" class="td_tabla_interna"><?php echo $item5->getDenominacion(); ?></td>
                                          <td width="87">Débito<input name="principal1<?php echo $item5->getId(); ?>" type="checkbox" class="chekbox2" id="principal1<?php echo $item5->getId(); ?>" onclick="validar(<?php echo $item5->getId(); ?>,1);" value="<?php echo $item5->getId(); ?>" <?php if(count($afectas) > 0){ if(($afectas->getIdpuc() == $item5->getId()) && $afectas->getTipo() == "Débito"){ ?>checked="checked"<?php } } ?> /></td>
                                          <td width="88">Crédito<input name="principal2<?php echo $item5->getId(); ?>" type="checkbox" class="chekbox2" id="principal2<?php echo $item5->getId(); ?>"  onclick="validar(<?php echo $item5->getId(); ?>,2);" value="<?php echo $item5->getId(); ?>" <?php if(count($afectas) > 0){  if(($afectas->getIdpuc() == $item5->getId()) && $afectas->getTipo() == "Crédito"){ ?>checked="checked"<?php } } ?> /></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                               
                               
							   <?php
							  	 }
							   $cont++;
							} 
						} 
					   ?>

                      </table></td>
                    </tr>
            <?php } ?>
     <?php } ?>
    
    

  </table></ul>
  </li>
 
  
<?php } ?> </ul>
</div>
    
    
    
    
    
    </td>
  </tr>
  <tr>
    <td height="18" valign="middle" align="center"><img src="images/line2.gif" width="800" height="1" /></td>
  </tr>
  <tr>
    <td height="70" valign="middle" align="center"><input style="width:90px;" name="Entrar" type="submit" class="boton_redondo" id="Entrar" value="::: Aceptar :::" /></td>
  </tr>
</table>

</form>
</body>
</html>
