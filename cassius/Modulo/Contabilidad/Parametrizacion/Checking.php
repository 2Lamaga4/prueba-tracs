<?php
   include "../php/dao/checquian.php";
if (isset($_POST['cedula'])) {
  sleep(2);//tiempo

  var_export($_REQUEST['cedula']);
$confir = new Checking();
$con = $confir->chequiar($_POST['cedula']);

echo "hola";
  if($con){
    $checking=true;
    $msg="Ya esta registrada"; 
  }else{
   $checking=false;
    $msg="OK"; 
  }
  $json=array("valid"=>$checking, "msg" => $msg);
  echo json_encode($json);
 
}
 
?>