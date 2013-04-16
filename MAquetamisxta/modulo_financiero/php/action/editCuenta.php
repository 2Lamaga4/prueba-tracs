<?php session_start();?>
<?php

require_once('../dao/daoConnection.php');
require_once('../dao/CuentaDAO.php');
require_once('../entities/cuentas.php');

$id = $_REQUEST['id']; 
$clase = $_REQUEST['clase']; 
$grupo = $_REQUEST['grupo']; 
$cuenta = $_REQUEST['cuenta']; 
$subcuenta = $_REQUEST['subcuenta'];
$auxiliar = $_REQUEST['auxiliar']; 
$denominacion = accents2HTML($_REQUEST['denominacion']); 
$descripcion_vivienda = accents2HTML($_REQUEST['descripcion_vivienda']); 


$location = "location: ./../../modificar_cuenta.php?id=".$id."&OK=1";


$CuentaDAO = new CuentaDAO();
$cuentas = new cuentas();

$cuentas->setId($id);
$cuentas->setCuenta($subcuenta.$auxiliar);
$cuentas->setDenominacion($denominacion);
$cuentas->setDescripcion($descripcion_vivienda);
$cuentas->setEstado('Activo');
$cuentas->setNivel(5);


$CuentaDAO->update($cuentas);
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
