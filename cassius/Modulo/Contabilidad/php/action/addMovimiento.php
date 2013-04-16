<?php session_start();?>
<?php

require_once('../dao/daoConnection.php');
require_once('../dao/MovimientosDAO.php');
require_once('../entities/movimientos.php');
require_once('../dao/AfectaDAO.php');
require_once('../entities/afecta.php');
require_once('../dao/CuentaDAO.php');
require_once('../entities/cuentas.php');

$num_movi = $_REQUEST['num_movi']; 
$fecha = substr($_REQUEST['fecha'],6,4)."/".substr($_REQUEST['fecha'],3,2)."/".substr($_REQUEST['fecha'],0,2); 
$documento = $_REQUEST['documento'];
$num_docu = $_REQUEST['num_docu'];
$concepto = accents2HTML($_REQUEST['concepto']); 
$estado = 1;
$ter_id = $_REQUEST['ter_id']; 


$location = "location: ./../../agregar_comprobante_diario.php?OK=1";


$MovimientosDAO = new MovimientosDAO();
$movimientos = new movimientos();
$movimientos2 = new movimientos();

$AfectaDAO = new AfectaDAO();
$afecta = new afecta();

$CuentaDAO = new CuentaDAO();
$cuentas = new cuentas();

$movimientos->setNumero($num_movi);
$movimientos->setFecha($fecha);
$movimientos->setTipodoc($documento);
$movimientos->setNumdoc($num_docu);
$movimientos->setConcepto($concepto);
$movimientos->setEstado($estado);
$movimientos->setTercero($ter_id);

$MovimientosDAO->save($movimientos);
$id = $MovimientosDAO->max_id();



if($_SESSION['numero'] == ""){
		
		$afectas = $AfectaDAO->getList($documento);
		
		foreach($afectas as $item){
			
			$debito = 0;
			if($_REQUEST['debito'.$item->getId()] != ""){
				$debito = $_REQUEST['debito'.$item->getId()]; 
			}
			
			$credito = 0;
			if($_REQUEST['credito'.$item->getId()] != ""){
				$credito = $_REQUEST['credito'.$item->getId()]; 
			}
		
			
			
			if($debito != "" || $credito != ""){
				$movimientos2->setIdmovimiento($id);
				$movimientos2->setCredito($credito);
				$movimientos2->setDebito($debito);
				$movimientos2->setCodcuenta($item->getId());
			
				$MovimientosDAO->save_movimiento_cueta($movimientos2);
			}
		}
 
}else{

	
	for($a = 1; $a <= $_SESSION['numero']; $a++){
		
		
		$cuen = $CuentaDAO->getCuenta($_REQUEST['idcuenta'.$a]);
		
		$debito = 0;
		if($_REQUEST['debito'.$a] != ""){
			$debito = $_REQUEST['debito'.$a]; 
		}
		
		$credito = 0;
		if($_REQUEST['credito'.$a] != ""){
			$credito = $_REQUEST['credito'.$a]; 
		}
		
		
		if($debito != "" || $credito != ""){
			$movimientos2->setIdmovimiento($id);
			$movimientos2->setCredito($credito);
			$movimientos2->setDebito($debito);
			$movimientos2->setCodcuenta($cuen->getId());
			$MovimientosDAO->save_movimiento_cueta($movimientos2);
		}
	}	


}
 
header($location);
exit;



function accents2HTML($mensaje){
    $mensaje = str_replace("�","&aacute;",$mensaje);
    $mensaje = str_replace("�","&eacute;",$mensaje);
    $mensaje = str_replace("�","&iacute;",$mensaje);
    $mensaje = str_replace("�","&oacute;",$mensaje);
    $mensaje = str_replace("�","&uacute;",$mensaje);
    $mensaje = str_replace("�","&ntilde;",$mensaje);
    
	$mensaje = str_replace("�","&Aacute;",$mensaje);
    $mensaje = str_replace("�","&Eacute;",$mensaje);
    $mensaje = str_replace("�","&Iacute;",$mensaje);
    $mensaje = str_replace("�","&Oacute;",$mensaje);
    $mensaje = str_replace("�","&Uacute;",$mensaje);
    $mensaje = str_replace("�","&Ntilde;",$mensaje);
    return $mensaje;
}

function findexts ($filename) 
 { 
	 $filename = strtolower($filename) ; 
	 $exts = split("[/\\.]", $filename) ; 
	 $n = count($exts)-1; 
	 $exts = $exts[$n]; 
	 return $exts; 
 } 
