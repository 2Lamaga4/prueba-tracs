<?php
session_start();
include_once('../php/dao/daoConnection.php');
include_once('../php/dao/MovimientosDAO.php');
include_once('../php/entities/movimientos.php');
include_once('../php/dao/TercerosDAO.php');
include_once('../php/entities/terceros.php');
include_once('../php/dao/DocumentoDAO.php');
include_once('../php/entities/documentos.php');
include_once('../php/dao/CuentaDAO.php');
include_once('../php/entities/cuentas.php');


$MovimientosDAO = new MovimientosDAO();
$movimientos = new movimientos();
$movimiento = $MovimientosDAO->getList();

$TercerosDAO = new TercerosDAO();
$terceros = new terceros();
$tercero = $TercerosDAO->getList();

$tercero_lista = array();
foreach ($tercero as $item) {
	$tercero_lista[] = utf8_encode($item->getNombretercero()); 
}
$DocumentoDAO = new DocumentoDAO();
$documentos = new documentos();
$documento = $DocumentoDAO->getList();
?>