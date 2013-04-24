<?php
 include "../php/include_dao.php";

$CuentaDAO = new CuentaDAO();
$cuenta = new cuentas();
if($_REQUEST['clase'] != "" && $_REQUEST['aux'] != ""){
	$cuentas = $CuentaDAO->Lista_Nivel($_REQUEST['clase'].$_REQUEST['aux'],$_REQUEST['nivel']);
}


if(count($cuentas) > 0){
	echo "<script> 
			alert('Ya se encuentra registrado el numero de cuenta.'); 
			parent.document.getElementById('auxiliar_g".$_REQUEST['nivel']."').value = '';
			parent.document.getElementById('auxiliar_g".$_REQUEST['nivel']."').focus();
	</script>";
	
}

 ?>