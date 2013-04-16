<?php session_start();
include "php/include_dao.php";

$id = "";
if($_REQUEST['id'] != ""){
	$id = $_REQUEST['id'];
}

$id2 = 0;
if($_REQUEST['id2'] != ""){
	$id2 = $_REQUEST['id2'];
}

$AfectaDAO = new AfectaDAO();
$afecta = new afecta();
$afe = $AfectaDAO->delete2($id);


echo "<script> location.href = 'modificar_documento.php?id=$id2'; </script>";
?>