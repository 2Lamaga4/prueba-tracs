<?php
include_once('../php/dao/daoConnection.php');
include_once('../php/dao/MovimientosDAO.php');
include_once('../php/entities/movimientos.php');
include_once('../php/dao/TercerosDAO.php');
include_once('../php/entities/terceros.php');
include_once('../php/dao/DocumentoDAO.php');
include_once('../php/entities/documentos.php');
include_once('../php/dao/CuentaDAO.php');
include_once('../php/entities/cuentas.php');
print_r($_POST);
$MovimientosDAO = new MovimientosDAO();
$movimientos = new movimientos();
$TercerosDAO = new TercerosDAO();
$terceros = new terceros();
$DocumentoDAO = new DocumentoDAO();
$documentos = new documentos();

///////////////////////////////////////////

$movimientos->setTercero($_POST['pagado']);
$movimientos->setConcepto($_POST['concepto']);
$movimientos->setFecha($_POST['fecha']);






 ?>