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
$k=0;
foreach($_POST as $recorer){
   if(!$recorer)
      {
         $arrego[$i]=0;
      }else{
       $arrego[$i]=$recorer;
      }
   $m=$i;
     
   $i++;
  // echo "iis".$i;
   
}

$m = $i;
$ar=array();
$j=0;
$d=$daoMovi->contarM($_POST['num_movis']);
$s=$d;
if(($d*4) == $i){
  $d=$i-$d*4;

}
else{
     $d=$i-$d*4;
     
}
for($i=2;$i<count($arrego)-$d;$i++)
   { 

      if($i%2==0){
          $movimientos = new movimientos();
          $movimientos->setDebito($arrego[$i]);
      }
      else{
           $movimientos->setCredito($arrego[$i]);
            $ar[$j]=$movimientos;
            $j++;
            
      }
     
   }

   $daoMovi->update($ar,$_POST['num_movis'],$_POST['concepto']);
   $matrix = array();
   $matrix[100][100]="";

 $aux=count($arrego)-$d;

$l=$aux;
 for($i=0;$i<($m/$aux-$s);$i++)
 {
      for($k=0;$k<4;$k++)
      {
        $matrix[$i][$k]=$arrego[$l];
        $l++;
      }
      echo "</br>";
     
 }
 $movidmi = new movimientos;

for($i=0;$i<($m/$aux-$s);$i++)
 {   $cuen = $cuentas->getCuenta($matrix[$i][0]);
     $movidmi ->setCodcuenta($cuen->getId());
     $movidmi ->setDebito($matrix[$i][2]);
     $movidmi ->setCredito($matrix[$i][3]);
     $movidmi ->setIdmovimiento($_POST['num_movis']);
     $daoMovi ->save_movimiento_cueta($movidmi);
     $movidmi = new movimientos;

 }


?>
