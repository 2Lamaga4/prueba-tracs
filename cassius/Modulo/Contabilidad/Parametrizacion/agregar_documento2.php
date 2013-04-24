<?php session_start();
include "../php/include_dao.php";

//session_unset($_SESSION['datos']);
$CuentaDAO = new CuentaDAO();
$cuenta = new cuentas();
$cuentasN5 = $CuentaDAO->getList(5);
$cont = 0;
foreach($cuentasN5 as $item5){
	
	if($_REQUEST['principal1'.$item5->getId()] != ""){
		$_SESSION['datos'][$cont] = $_REQUEST['principal1'.$item5->getId()];
		$_SESSION['tipo'][$cont] = "Débito";
		$cont++;
	}
	
	if($_REQUEST['principal2'.$item5->getId()] != ""){
		$_SESSION['datos'][$cont] = $_REQUEST['principal2'.$item5->getId()];
		$_SESSION['tipo'][$cont] = "Crédito";
		$cont++;
	}
	
	
}

echo "<script>



 window.opener.location.href = window.opener.location.href; 
	//window.opener.document.forms[0].submit();



  if (window.opener.progressWindow) 
		
 { 
	//var id = 1;
    window.opener.progressWindow.close()
  } 
  
  window.close(); 




 </script>";

?>
