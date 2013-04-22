<?php session_start();?>
<?php

//se llama la conexion,las funciones, y la entidades
require_once('../../../php/dao/daoConnection.php');
require_once('../../../php/dao/CuentaDAO.php');
require_once('../../../php/entities/cuentas.php');


$id = $_GET['id'];

//se direcciona nuevamente a la pagina parametrizacion
$location = "location: ../../parametrizacion_cuentas.php?OK_de=1";


$CuentaDAO = new CuentaDAO();
$cuentas = new cuentas();
$cuentas = $CuentaDAO->get($id);

//se envia el dato a eliminar
$CuentaDAO->delete($id);

header($location);
exit;
?>