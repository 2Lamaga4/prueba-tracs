<?php include "php/include_dao.php";


$fecha1 = "";
if($_REQUEST['fecha1'] != ""){
	$fecha1 = $_REQUEST['fecha1']; 
}

$fecha2 = "";
if($_REQUEST['fecha2'] != ""){
	$fecha2 = $_REQUEST['fecha2']; 
}

$movi = "";
if($_REQUEST['movi'] != ""){
	$movi = $_REQUEST['movi'];
}


$MovimientosDAO = new MovimientosDAO();
$movimientos = new movimientos();

if($fecha1 != "" && $fecha2 != ""){
	$movimiento = $MovimientosDAO->getList_fecha($fecha1,$fecha2);
}else if($movi != ""){
	$movimiento = $MovimientosDAO->getList_movi($movi);
}else{
	$movimiento = $MovimientosDAO->getList();
}


$TercerosDAO = new TercerosDAO();
$terceros = new terceros();

$DocumentoDAO = new DocumentoDAO();
$documentos = new documentos();

$CuentaDAO = new CuentaDAO();
$cuentas = new cuentas();





$texto = "";

$texto.="<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link href='http://localhost/cassius/modulo_financiero/config/estilos_cassius.css' rel='stylesheet' type='text/css' />
<table width='300' border='0' align='center' cellpadding='0' cellspacing='1'>
    <tr>
      <td height='30' align='center'><table width='700' border='0' align='center' cellpadding='0' cellspacing='2'>";
       foreach($movimiento as $item){ 
	   		$tercero = $TercerosDAO->get($item->getTercero());
			$doc = $DocumentoDAO->get($item->getTipodoc());
			
			$mvCuentas = $MovimientosDAO->getList_cuentas($item->getId());
	   
        $texto.="<tr>
          <td width='780' height='60' align='left' valign='middle' bgcolor='#E6CCCD' class='texto_azul' ><table border='0' cellpadding='0' cellspacing='3'>
            <tr>
              <td colspan='4'><span class='texto_azul2'><strong>&nbsp;Movimiento ";
			  
			  
			   if($item->getNumero() < 10) { $texto.="0";  } $texto.= $item->getNumero();
			   
			   $texto.="</strong></span><strong> - </strong>".substr($item->getfecha(),8,2).'/'.substr($item->getfecha(),5,2).'/'.substr($item->getfecha(),0,4);
			  
			  $texto.="</td>
            </tr>
            <tr>
              <td colspan='4'><img src='images/line2.gif' width='760' height='1' /></td>
            </tr>
            <tr>
              <td colspan='4'><strong>&nbsp;Nombre de tercero:</strong>".$tercero->getNodocumento()."&nbsp;&nbsp;&nbsp;&nbsp;<strong>Nit:</strong>".$tercero->getNombretercero()."&nbsp;&nbsp;&nbsp;&nbsp;<strong>Concepto:</strong>".$item->getConcepto()."</td>
            </tr>
          </table></td>
          <td width='164' align='left' valign='middle' bgcolor='#D9B0B3' class='texto_azul'> &nbsp;&nbsp;<span class='texto_azul_peque'>Documento</span>:".$doc->getSigla()." ".$item->getNumdoc()."</td>
          </tr>
        <tr>
          <td height='35' colspan='6' valign='top'><table width='760' border='0' align='center' cellpadding='0' cellspacing='2'  align='center'>
            <tr>
              <td height='20' class='td_resaltado_azul' align='center' >Cuenta</td>
              <td width='595' class='td_resaltado_azul' align='center' >Descripción</td>
              <td class='td_resaltado_azul' align='center' ><div align='center'>Débito</div></td>
              <td class='td_resaltado_azul' align='center' ><div align='center'>Crédito</div></td>
            </tr>";
            
              
            foreach($mvCuentas as $item2){ 
			 $cuenta = $CuentaDAO->get($item2->getCodcuenta());
				
		
        $texto.="<tr class='tr_tabla_interna'>
                  <td width='74' class='td_tabla_interna' align='center' >".$cuenta->getCuenta()."</td>
                  <td class='td_tabla_interna' align='center' >".$cuenta->getDenominacion()."</td>
                  <td width='108' class='td_tabla_interna' align='center' >".$item2->getDebito()."</td>
                  <td width='113' class='td_tabla_interna' align='center' >".$item2->getCredito()."</td>
                </tr>";
          	} 
          
          
          $texto.="</table></td>
          </tr>";
         } 
     $texto.=" </table></td>
    </tr>
 
  </table>";
  


$file=fopen("exel.php","w");
$texto='<?php header("Content-Type: text/html; charset=UTF-8");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition:  filename=\"movimientos.xls\";")?>
<p>'.$texto;
fwrite($file,$texto);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendtrans(duration=1)">
<title>Cassius - software de propiedad horizontal</title>
<link href="config/estilos_cassius.css" rel="stylesheet" type="text/css" />

<style type="text/css">
#subtitulo {
	position:absolute;
	left:50%;
	top:95px;
	width:552px;
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
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='contabilidad_home.html'"/>
</div>
<div id="logo_small3"><img src="images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad"></div>
<div id="contenido_tabla2">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="seccion">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center" class="texto_azul2">El reporte se ha generado satisfactoriamente</div></td>
        </tr>
        <tr>
          <td height="37"><div align="center">
            <input type="button" name="button" id="button" value="::: Regresar :::" onclick="location.href='rc_movimientos.php'" />
          </div></td>
        </tr>
      </table>
</div>
<div class="titulos" id="subtitulo">&gt; Registro contable - Movimientos</div>


</body>
</html>



<?php
echo "<script> 
location.href = 'exel.php'; 
</script>";

/////////////////////////////////////////////////////////////////////////////////

?>
