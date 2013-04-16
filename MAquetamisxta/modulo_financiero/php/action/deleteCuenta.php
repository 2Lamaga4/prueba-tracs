<?php session_start();?>
<?php


require_once('../dao/daoConnection.php');
require_once('../dao/CuentaDAO.php');
require_once('../entities/cuentas.php');


$id = $_GET['id'];

$location = "location: ./../../parametrizacion_cuentas.php?OK_de=1";


$CuentaDAO = new CuentaDAO();
$cuentas = new cuentas();
$cuentas = $CuentaDAO->get($id);


$CuentaDAO->delete($id);

//everything fine!
header($location);
exit;
?>