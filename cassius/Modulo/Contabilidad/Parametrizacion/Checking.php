<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "123";
$dbname = "dbconjun";

$id = mysql_connect($dbhost, $dbuser, $dbpassword) or die("error en coneccion: " . mysql_error()); 
mysql_select_db($dbname, $id); 
 
if (isset($_POST['cedula'])) {
  sleep(2);
  $query="SELECT idterceros FROM terceros WHERE nombretercero = '".$_POST['cedula']."'";

  $rs_User = mysql_query($query) or die(mysql_error());
 
  $num_rows=mysql_num_rows($rs_User);
 
  
  if($num_rows==0){
    $checking=true;
    $msg="ok";
  }else{
   $checking=false;
   $msg="X"; 
  }
 
  $json=array("valid"=>$checking, "msg" => $msg);
 
  echo json_encode($json);
 
}
 
?>