<?php session_start();?>
<?php


require_once('../dao/daoConnection.php');
require_once('../dao/DocumentoDAO.php');
require_once('../entities/documentos.php');
require_once('../dao/AfectaDAO.php');
require_once('../entities/afecta.php');

$id = $_REQUEST['id'];

$location = "location: ./../../parametrizacion_documentos.php?OK_de=1";


$DocumentoDAO = new DocumentoDAO();
$documento = new documentos();
$AfectaDAO = new AfectaDAO();
$afectas = new afecta();

$AfectaDAO->delete($id);
$DocumentoDAO->delete($id);


//everything fine!
header($location);
exit;

?>