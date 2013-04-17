<?php session_start();
include "../php/include_dao.php";

unset($_SESSION['arreglo']);
unset($_SESSION['numero']);
$nit = 0;
if(isset($_REQUEST['nit'])){
	if($_REQUEST['nit'] != ""){
		$nit = $_REQUEST['nit'];
	}
}
$id_t = 0;
$nit = "";
$nombre = "";
if($_REQUEST['tercero'] != ""){
	$nombre = $_REQUEST['tercero'];
}

$TercerosDAO = new TercerosDAO();
$terceros = new terceros();

if($nombre != ""){
	$tercero = $TercerosDAO->Validar_tercero2($nombre);
	if(count($tercero) > 0){
		$id_t = $tercero->getId();
		$nit = $tercero->getNodocumento();
	}
	
}



?>             

<table width="152" border="0">
  <tr>
    <td width="42" valign="middle"><strong>Nit:</strong></td>
    <td width="145" valign="middle"><input name="identifica" type="text" class="textarea_redondo2" id="identifica" style="width:80px;" readonly="readonly" value="<?php echo $nit; ?>" />
    <input name="ter_id" id="ter_id" type="hidden" value="<?php echo $id_t; ?>"></td>
  </tr>

</table>
