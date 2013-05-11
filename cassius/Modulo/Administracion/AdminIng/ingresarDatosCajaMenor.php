<?php
include_once('../php/dao/daoConnection.php');
include_once('../php/dao/MovimientosDAO.php');
include_once('../php/entities/movimientos.php');
include_once('../php/dao/TercerosDAO.php');
include_once('../php/entities/terceros.php');
include_once('../php/dao/DocumentoDAO.php');
include_once('../php/entities/documentos.php');
include_once('../php/dao/CuentaDAO.php');
include_once('../php/entities/cuentas.php');


$MovimientosDAO = new MovimientosDAO();
$movimientos = new movimientos();
$TercerosDAO = new TercerosDAO();
$terceros = new terceros(); 
$documentos = new documentos();
$cuentasDAO = new CuentaDAO();
$cuentas = new cuentas();
$loclisacion="location: CajaMenor.php?OK=1";
///////////////////////////////////////////
//

$saldo = $MovimientosDAO->saldo();
echo $saldo;
$movimientos = $MovimientosDAO->get_documento(5);


$num_movi = count($MovimientosDAO->getList())+1;
$tercer = $TercerosDAO->Validar_tercero2($_POST['pagado']);
$terceros = $tercer;

if($saldo-$_POST['valor'] > 0){
$d=$saldo-$_POST['valor'];
$movimientos->setNumero($num_movi);
	$movimientos->setFecha($_POST['fecha']);
    $movimientos->setTipodoc(5);
    $movimientos->setNumdoc($movimientos->getNumdoc()+1);
    $movimientos->setConcepto($_POST['concepto']);
    $movimientos->setEstado(1);
    $movimientos->setTercero($terceros->getId());
      $MovimientosDAO->save($movimientos);
//////////////Vamos a pasar los datos a la funcion guardar de dao////////////////////
  
$id = $MovimientosDAO->max_id();

	$movimientos->setCodcuenta($_POST['categoria']);
	$movimientos->setCredito($_POST['valor']);
	$movimientos->setDebito(0);
	$movimientos->setIdmovimiento($id);
	$MovimientosDAO->save_movimiento_cueta($movimientos);
	$MovimientosDAO->modificarsaldo($d);
header($loclisacion);
exit;
}
	

 ?>