<?php include "../php/include_dao.php";

$idcuenta = 0;
if($_REQUEST['idcuenta'] != ""){
	$idcuenta = $_REQUEST['idcuenta'];
}

$n = 0;
if($_REQUEST['n'] != ""){
	$n = $_REQUEST['n'];
}

$CuentaDAO = new CuentaDAO();
$cuentas = new cuentas();
$descripcion = "";

if($idcuenta != 0){
	$cuenta = $CuentaDAO->getCuenta($idcuenta);
	if(count($cuenta) > 0){
		$descripcion = $cuenta->getDenominacion();
	}
}

?>
<input name="cuent<?php echo $n; ?>" type="text" class="textarea_redondo2" id="cuenta<?php echo $n; ?>" style="width:400px;" value="<?php echo $descripcion; ?>" readonly="readonly" /> 