<?php session_start();?>
<?php

require_once('../dao/daoConnection.php');
require_once('../dao/TercerosDAO.php');
require_once('../entities/terceros.php');




$id = $_REQUEST['id'];
$con = isset($_REQUEST['con']); 


$location = "location: ./../../Parametrizacion/terceros.php?OK=3";


$TercerosDAO = new TercerosDAO();
$terceros = new terceros();

if($con == 1){
$TercerosDAO->activar($id);
}else{
$TercerosDAO->delete($id);  
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
