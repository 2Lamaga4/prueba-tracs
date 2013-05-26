<?php 
include "../php/dao/CuentaDAO.php";
echo "cddadas";
$GLOBALS['ter1']="";
 print_r($_GET);

if (isset($_GET['cuenta'])) {

  //sleep(0.999);

    $TerceroDAO = new  CuentaDAO();
    $newTerceros = new cuentas();
    $Terceros = $TerceroDAO->getCuenta($_GET['cuenta']);

  
  $num_rows=$GLOBALS['ter1'];
 
  
  if($num_rows==0){
     $checking=false;
     $msg='No existe Tercero. <a href="#"  onclick="javascript:agregar_Tercero()"> Agregar</a>'; 
  }else{
    $checking=true;
    $msg=" ";  
  }
 
  $json=array("valid"=>$checking, "msg" => $msg);
 
  echo json_encode($json);
 
}
 


?>