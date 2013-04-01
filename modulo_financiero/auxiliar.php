<?php include "php/include_dao.php";

$CuentaDAO = new CuentaDAO();
$cuenta = new cuentas();
$cuentas = $CuentaDAO->getList(1);


if(isset($_GET['id'])){
$idd=$_GET['id'];
if($idd != ""){
	$Idcuentas = $CuentaDAO->get($idd);
	$datos = substr($Idcuentas->getCuenta(),0,8);
	echo $datos[0].$datos[1].$datos[2].$datos[3].$datos[4].$datos[5];
}else{
	echo $_GET['numero']; 
}
}
else{
	echo $_GET['numero']; 
}
?>