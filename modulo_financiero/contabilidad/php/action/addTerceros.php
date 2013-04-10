<?php session_start();?>
<?php
//se llama la conexion,las funciones, y la entidades
require_once('../../../php/dao/daoConnection.php');
require_once('../../../php/dao/TercerosDAO.php');
require_once('../../../php/entities/terceros.php');


$documento = $_REQUEST['documento']; 
$numero = $_REQUEST['numero']; 
$nombre = $_REQUEST['nombre']; 
$telefono = $_REQUEST['telefono']; 
$direccion = $_REQUEST['direccion']; 
$correo = $_REQUEST['correo']; 
$regimen = $_REQUEST['regimen']; 

switch ($_REQUEST['des']) {
    case 1:
          $location = "location: ../../../agregar_tercero2.php?OK=2&i=".$numero."&nombre=".$nombre;
        break;
    case 2:
     $location = "location: ../../../terceros.php?OK=2&i=".$numero."&nombre=".$nombre;
       break;
    default:
        # code...
        break;
}

$TercerosDAO = new TercerosDAO();
$terceros = new terceros();

$terceros->setTipodocumento($documento);
$terceros->setNodocumento($numero);
$terceros->setNombretercero($nombre);
$terceros->setDireccion($direccion);
$terceros->setTelefono($telefono);
$terceros->setEmail($correo);
$terceros->setRegimen($regimen);

$TercerosDAO->save($terceros);

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
