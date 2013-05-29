<?php 
include_once('../dao/daoConnection.php');
include_once('../dao/MovimientosDAO.php');
include_once('../entities/movimientos.php');
include_once('../dao/AfectaDAO.php');
include_once('../entities/afecta.php');
include_once('../dao/CuentaDAO.php');
include_once('../entities/cuentas.php');



$daoMovi = new MovimientosDAO();
$cuentas = new CuentaDAO();
$cuen = new cuentas();
$idmovi = $_POST['num_movis'];
$consecto = $_POST['concepto'];
$arrego=array();
$arreglo2 = array();
$i=0;
$j=0;
$k=2;
foreach($_POST as $recorer){
    $arrego[$i]=$recorer;
      $i++; 
}

$d=$daoMovi->contarM($_POST['num_movis']);
$matrix2=array();
for($i=0;$i<((count($arrego)-2)/4);$i++){

  for($j=0;$j<4;$j++)
     {  
        $matrix2[$i][$j]=$arrego[$k];
         if(!$matrix2[$i][$j]){
           $matrix2[$i][$j]=0;
         }
        $k++;     
      }
  
       echo "</br>";
}


////////////////*********************////////////////////////////*//////////////////////////////
$movimientos = new movimientos();
$movimientos1 = new movimientos();
$movimientos1 = $daoMovi->getList_cuentas($_POST['num_movis']);
$i=0;
foreach ($movimientos1 as $recorer){
      $cuen =   $cuentas->getCuenta($matrix2[$i][0]);
      $movimientos->setCodcuenta($cuen->getId());
      $movimientos->setDebito($matrix2[$i][2]);
      $movimientos->setCredito($matrix2[$i][3]);
      $movimientos->setIdmovcuentas($recorer->getIdmovcuentas());
      $daoMovi -> updateMovcuentas($movimientos);
      $movimientos = new movimientos;   
    $i++;
}


for($i=$d;$i<count($matrix2);$i++){
      $cuen =   $cuentas->getCuenta($matrix2[$i][0]);
      $movimientos->setCodcuenta($cuen->getId());
      $movimientos->setDebito($matrix2[$i][2]);
      $movimientos->setCredito($matrix2[$i][3]);
      $movimientos->setIdmovimiento($_POST['num_movis']);
      $daoMovi -> save_movimiento_cueta($movimientos);
      $movimientos = new movimientos;   
}
//--------------//////--------------------------/////////////////////////--------////////////////
header("location ../../RegistroContable/EditarMovimiento.php");
exit;


?>
