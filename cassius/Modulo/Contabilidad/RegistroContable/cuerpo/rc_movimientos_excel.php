<?php require_once('../php/dao/daoConnection.php');
require_once('../php/dao/MovimientosDAO.php');
require_once('../php/entities/movimientos.php');
require_once('../php/dao/TercerosDAO.php');
require_once('../php/entities/terceros.php');
require_once('../php/dao/DocumentoDAO.php');
require_once('../php/entities/documentos.php');
require_once('../php/dao/CuentaDAO.php');
require_once('../php/entities/cuentas.php');


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
/*cambiar link por el del servidor*/
$texto.="<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link href='http://cassiusph.com/cassius/Modulo/Contabilidad/config/estilos_cassius.css' rel='stylesheet' type='text/css' />
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
              <td colspan='4'><img src='../images/line2.gif' width='760' height='1' /></td>
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

