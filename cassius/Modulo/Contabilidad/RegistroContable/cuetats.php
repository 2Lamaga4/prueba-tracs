<?php 


print_r($_REQUEST);
$checking=true;
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

$msg='<input name="cuenen'.$n.'" type="text" class="textarea_redondo2" id="cuen'.$n.'" style="width:400px;" value="'.$descripcion.' " readonly="readonly" /> ';
 
 $json=array("valid"=>$checking, "msg" => $msg);
 echo json_encode($json); 
?>
