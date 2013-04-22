<?php session_start();?>
<?php

require_once('../dao/daoConnection.php');
require_once('../dao/FuncionariosDAO.php');
require_once('../entities/funcionarios.php');

$id = $_REQUEST['id']; 
$nombre = $_REQUEST['nombre']; 
$apellido = $_REQUEST['apellido']; 
$documento = $_REQUEST['documento']; 
$cedula = $_REQUEST['cedula']; 
$rut = $_REQUEST['rut']; 
$telefono = $_REQUEST['telefono']; 
$celular = $_REQUEST['celular']; 
$direccion = $_REQUEST['direccion']; 
$cargo = $_REQUEST['cargo']; 
$url = $_REQUEST['url']; 

$location = "location: ./../../Parametrizacion/".$url.".php?OK=2";


$FuncionariosDAO = new FuncionariosDAO();
$funcionarios = new funcionarios();

$funcionarios->setId($id);
$funcionarios->setTipodocumento($documento);
$funcionarios->setNodocumento($cedula);
$funcionarios->setNombres($nombre);
$funcionarios->setApellidos($apellido);
$funcionarios->setRutnit($rut);
$funcionarios->setTelefono($telefono);
$funcionarios->setCelular($celular);
$funcionarios->setDireccion($direccion);
$funcionarios->setCargo($cargo);

$FuncionariosDAO->update($funcionarios);

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
