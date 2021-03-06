<?php session_start();?>
<?php

require_once('../dao/daoConnection.php');
require_once('../dao/CuentaDAO.php');
require_once('../entities/cuentas.php');



$cuenta = $_REQUEST['cuenta'];
$nivel = $_REQUEST['nivel'];  
$auxiliar = $_REQUEST['auxiliar_g'.$nivel]; 
$denominacion = accents2HTML($_REQUEST['denominacion_g'.$nivel]); 
$descripcion = accents2HTML($_REQUEST['descripcion_g'.$nivel]); 

if($nivel == 2){
	$location = "location: ./../../agregar_grupo.php?OK=1";
}else if($nivel == 3){
	$location = "location: ./../../agregar_cuenta_p.php?OK=1";
}else if($nivel == 4){
	$location = "location: ./../../agregar_subcuenta.php?OK=1";
}

$CuentaDAO = new CuentaDAO();
$cuentas = new cuentas();


$cuentas->setCuenta($cuenta.$auxiliar);
$cuentas->setDenominacion($denominacion);
$cuentas->setDescripcion($descripcion);
$cuentas->setEstado('Activo');
$cuentas->setNivel($nivel);


$CuentaDAO->save($cuentas);
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
