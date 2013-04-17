<?php
session_start();
include "../php/include_dao.php";

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