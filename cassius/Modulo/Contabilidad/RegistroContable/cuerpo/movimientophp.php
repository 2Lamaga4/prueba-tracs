<?php   session_start();
include "../php/include_dao.php";

unset($_SESSION['arreglo']);
unset($_SESSION['numero']);


$fecha1 = "";
if(isset($_REQUEST['fecha1'])){

  if($_REQUEST['fecha1'] != ""){
  $fecha1 = substr($_REQUEST['fecha1'],6,4)."/".substr($_REQUEST['fecha1'],3,2)."/".substr($_REQUEST['fecha1'],0,2); 
  }
}

$fecha2 = "";
if(isset($_REQUEST['fecha2'])){
  if($_REQUEST['fecha2'] != ""){
    $fecha2 = substr($_REQUEST['fecha2'],6,4)."/".substr($_REQUEST['fecha2'],3,2)."/".substr($_REQUEST['fecha2'],0,2); 
  }
}
$movi = "";
if(isset($_REQUEST['movi'])){
  if($_REQUEST['movi'] != ""){
  $movi = $_REQUEST['movi'];
  }
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
?>