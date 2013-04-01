<?php session_start();

$id = "";
if($_REQUEST['id'] != ""){
	$id = $_REQUEST['id'];
}



if($id != ""){
	unset($_SESSION['datos'][$_REQUEST['id']]);
	
	for($i = 0; $i < count($_SESSION['datos']); $i++){ 
		if($_SESSION['datos'][$i] == ""){
			$_SESSION['datos'][$i] = $_SESSION['datos'][$i];
			$_SESSION['tipo'][$i] = $_SESSION['tipo'][$i];

		}
	}
	
}
if($_REQUEST['m'] == 1){
	echo "<script> location.href = 'modificar_documento.php?id=$id'; </script>";
}else{
	echo "<script> location.href = 'agregar_documento.php?id=1'; </script>";
}
?>