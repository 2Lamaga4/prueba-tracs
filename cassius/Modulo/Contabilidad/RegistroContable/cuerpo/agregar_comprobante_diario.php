<?php
session_start();
require_once('../php/dao/daoConnection.php');
require_once('../php/dao/MovimientosDAO.php');
require_once('../php/entities/movimientos.php');
require_once('../php/dao/TercerosDAO.php');
require_once('../php/entities/terceros.php');
require_once('../php/dao/DocumentoDAO.php');
require_once('../php/entities/documentos.php');
require_once('../php/dao/CuentaDAO.php');
require_once('../php/entities/cuentas.php');


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