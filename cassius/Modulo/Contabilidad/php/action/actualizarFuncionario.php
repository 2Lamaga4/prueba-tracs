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
