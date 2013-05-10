<?php
include_once('../php/dao/daoConnection.php');
include_once('../php/dao/MovimientosDAO.php');
include_once('../php/entities/movimientos.php');
include_once('../php/dao/TercerosDAO.php');
include_once('../php/entities/terceros.php');
include_once('../php/dao/DocumentoDAO.php');
include_once('../dao/AfectaDAO.php');
include_once('../entities/afecta.php');
include_once('../php/entities/documentos.php');
include_once('../php/dao/CuentaDAO.php');
include_once('../php/entities/cuentas.php');

print_r($_POST);
$MovimientosDAO = new MovimientosDAO();
$movimientos = new movimientos();
$TercerosDAO = new TercerosDAO();
$terceros = new terceros(); 
$documentos = new documentos();
$cuentasDAO = new CuentaDAO();
$cuentas = new cuentas();
$AfectaDAO = new AfectaDAO();
$afecta = new afecta();

///////////////////////////////////////////
//
$id = $MovimientosDAO->max_id();

$num=$MovimientosDAO->get_documento(5)+1;
$num_movi = count($MovimientosDAO->getList())+1;
$tercer = $TercerosDAO->Validar_tercero2($_POST['pagado']);
$terceros = $tercer;


	$movimientos->setNumero($num_movi);
    $movimientos->setTipodoc($documento);
    $movimientos->setNumdoc($num_docu);
    $movimientos->setConcepto($_POST['concepto']);
    $movimientos->setEstado(1);
    $movimientos->setTercero($terceros->getId());

//////////////Vamos a pasar los datos a la funcion guardar de dao////////////////////

	$MovimientosDAO->save($movimientos);
	$movimientos->setCodcuenta($_POST['categoria']);
	$movimientos->setCredito($_POST['valor']);
	$movimientos->setDebito(0);
	$movimientos->setId($id);
	$MovimientosDAO->save_movimiento_cueta($movimientos);




 ?>