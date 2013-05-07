<?php
$GLOBALS['ter1']="";

 include "../php/dao/terceros.php";
  
 
if (isset($_GET['tercero'])) {

  //sleep(0.999);

    $TerceroDAO = new TerceroDAO();
    $newTerceros = new Terceros();
    $Terceros = $TerceroDAO->chequiarTER($_GET['tercero']);

  
  $num_rows=$GLOBALS['ter1'];
 
  
  if($num_rows==0){
     $checking=false;
     $msg="X"; 
  }else{
    $checking=true;
    $msg="ok";  
  }
 
  $json=array("valid"=>$checking, "msg" => $msg);
 
  echo json_encode($json);
 
}
 
?>