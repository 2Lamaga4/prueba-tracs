<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "123";
$dbname = "dbconjun";

$id = mysql_connect($dbhost, $dbuser, $dbpassword) or die("error en coneccion: " . mysql_error()); 
mysql_select_db($dbname, $id); 
 
if (isset($_POST['tercero'])) {
  sleep(2);
  $query="SELECT idterceros FROM terceros WHERE nombretercero = '".$_POST['tercero']."'";

  $rs_User = mysql_query($query) or die(mysql_error());
 
  $num_rows=mysql_num_rows($rs_User);
 
  $checking=false;
  $msg="";
  if($num_rows==0){
    $checking=true;
    $msg="Disponible";
  }
 
  $json=array("valid"=>$checking, "msg" => $msg);
 
  echo json_encode($json);
 
}
 
?>