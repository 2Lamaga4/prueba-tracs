<?php 
include_once('../dao/daoConnection.php');
include_once('../dao/MovimientosDAO.php');
include_once('../entities/movimientos.php');
include_once('../dao/AfectaDAO.php');
include_once('../entities/afecta.php');
include_once('../dao/CuentaDAO.php');
include_once('../entities/cuentas.php');
print_r($_POST);



$daoMovi = new MovimientosDAO();
$idmovi = $_POST['num_movis'];
$consecto = $_POST['concepto'];
$arrego=array();
$i=0;
foreach($_POST as $recorer){

	$arrego[$i]=$recorer;
	$i++;
}
$ar=array();
$j=0;
for($i=2;$i<count($arrego);$i++)
   { 

   	if($i%2==0){
   		 $movimientos = new movimientos();
   		 $movimientos->setDebito($arrego[$i]);
      }
      else{
      	  $movimientos->setCredito($arrego[$i]);
      	   $ar[$j]=$movimientos;
   	      
      }
     
   }
   $daoMovi->update($ar,$_POST['num_movis'],$_POST['concepto']);

?>
