<?php
 require_once('../php/dao/daoConnection.php');
require_once('../php/dao/MovimientosDAO.php');
require_once('../php/entities/movimientos.php');
require_once('../php/dao/TercerosDAO.php');
require_once('../php/entities/terceros.php');
require_once('../php/dao/DocumentoDAO.php');
require_once('../php/entities/documentos.php');
require_once('../php/dao/CuentaDAO.php');
require_once('../php/entities/cuentas.php');

$id_documento = 0;
if($_REQUEST['documento'] != ""){
	$id_documento = $_REQUEST['documento'];
}

$MovimientosDAO = new MovimientosDAO();
$movimientos = new movimientos();
$num = 1;

if($id_documento != 0){
	$movimiento = $MovimientosDAO->get_documento($id_documento);
	if(count($movimiento) > 0){
		echo $movimiento->getNumdoc() + 1;
		$num = $movimiento->getNumdoc() + 1;
	}else{
		echo $num;
	}
}
?>

<input name="num_docu" id="num_docu" type="hidden" value="<?php echo $num; ?>">
