<?php session_start();
include "../php/include_dao.php";

unset($_SESSION['arreglo']);
unset($_SESSION['numero']);

$nombre = "";


if($_REQUEST['tercero'] != ""){
	$nombre = $_REQUEST['tercero'];

}

$TercerosDAO = new TercerosDAO();
$terceros = new terceros();


if($nombre != ""){
	$tercero = $TercerosDAO->Validar_tercero2($nombre);
}



?>
<table width="347" border="0">
  <?php if($nombre != "" && count($tercero) == 0){ 	?>
      <tr>
        <td width="52">&nbsp;</td>
        <td width="285"><div style="color:#FF0000">No existe ell tercero. Por favor agregelo.</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><a href="#"  onclick="javascript:agregar_Tercero()">Agregar Tercero</a></td>
      </tr>
  <?php } ?>
</table>
