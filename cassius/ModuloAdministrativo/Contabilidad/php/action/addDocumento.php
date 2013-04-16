<?php session_start();?>
<?php

require_once('../dao/daoConnection.php');
require_once('../dao/CuentaDAO.php');
require_once('../entities/cuentas.php');
require_once('../dao/DocumentoDAO.php');
require_once('../entities/documentos.php');
require_once('../dao/AfectaDAO.php');
require_once('../entities/afecta.php');

$sigla = $_REQUEST['sigla']; 
$nombre = $_REQUEST['nombre']; 
$descripcion = accents2HTML($_REQUEST['descripcion']); 


$location = "location: ./../../parametrizacion_documentos.php?OK=1";


$DocumentoDAO = new DocumentoDAO();
$documento = new documentos();
$AfectaDAO = new AfectaDAO();
$afectas = new afecta();

$CuentaDAO = new CuentaDAO();
$cuenta = new cuentas();
$cuentasN5 = $CuentaDAO->getList(5);

$documento->setSigla($sigla);
$documento->setNombredoc($nombre);
$documento->setDescripcion($descripcion);
$DocumentoDAO->save($documento);
$docMax = $DocumentoDAO->Max();

for($i = 0; $i < count($_SESSION['datos']); $i++){ 
	$cuentasN5 = $CuentaDAO->get($_SESSION['datos'][$i]);
	if(count($cuentasN5) > 0){	
		$afectas->setIddocumentos($docMax->getId());
		$afectas->setIdpuc($cuentasN5->getId());
		$afectas->setTipo($_SESSION['tipo'][$i]);
		$AfectaDAO->save($afectas);
	}
}



header($location);
exit;



function accents2HTML($mensaje){
    $mensaje = str_replace("á","&aacute;",$mensaje);
    $mensaje = str_replace("é","&eacute;",$mensaje);
    $mensaje = str_replace("í","&iacute;",$mensaje);
    $mensaje = str_replace("ó","&oacute;",$mensaje);
    $mensaje = str_replace("ú","&uacute;",$mensaje);
    $mensaje = str_replace("ñ","&ntilde;",$mensaje);
    
	$mensaje = str_replace("Á","&Aacute;",$mensaje);
    $mensaje = str_replace("É","&Eacute;",$mensaje);
    $mensaje = str_replace("Í","&Iacute;",$mensaje);
    $mensaje = str_replace("Ó","&Oacute;",$mensaje);
    $mensaje = str_replace("Ú","&Uacute;",$mensaje);
    $mensaje = str_replace("Ñ","&Ntilde;",$mensaje);
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
