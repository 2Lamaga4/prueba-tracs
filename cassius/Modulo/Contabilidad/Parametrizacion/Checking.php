<?php
$GLOBALS['che1']="";

 include "../php/dao/checquian.php";

  
 
if (isset($_GET['cedula'])) {

  sleep(0.999);
  $objche = new Checking();  
  $entiche1 = new che();   
  $entiche =  $objche->chequiar($_GET['cedula']);
  $entiche1->setId($entiche);

  $cher=$GLOBALS['che1'];

  
    $checking=false;
    $msg="X"; 
  if($cher==0){
    $checking=true;
    $msg="ok";
  }
 
  $json=array("valid"=>$checking, "msg" => $msg);
 
  echo json_encode($json);
 
}
 
?>