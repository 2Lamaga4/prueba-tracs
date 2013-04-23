<?php session_start();
require_once('../php/dao/daoConnection.php');
require_once('../php/dao/MovimientosDAO.php');
require_once('../php/entities/movimientos.php');
require_once('../php/dao/TercerosDAO.php');
require_once('../php/entities/terceros.php');
require_once('../php/dao/DocumentoDAO.php');
require_once('../php/entities/documentos.php');
require_once('../php/dao/CuentaDAO.php');
require_once('../php/entities/cuentas.php');

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
  if(count($tercero)>0)
  { $id_t = $tercero->getId();
    $nit = $tercero->getNodocumento();
     ?>
     <table width="152" border="0">
  <tr>
    <td width="42" valign="middle"><strong>Nit:</strong></td>
    <td width="145" valign="middle"><input name="identifica" type="text" class="textarea_redondo2" id="identifica" style="width:80px;" readonly="readonly" value="<?php echo $nit; ?>" />
    <input name="ter_id" id="ter_id" type="hidden" value="<?php echo $id_t; ?>"></td>
  </tr>
</table>
 <?php }else{
   
    ?>
     <table width="347" border="0">
        <tr>
        <td width="52">&nbsp;</td>
        <td width="285"><div style="color:#FF0000">No existe ell tercero. Por favor agregelo.</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><a href="#"  onclick="javascript:agregar_Tercero()">Agregar Tercero</a></td>
      </tr>
   </table>
<?php
 }
}
?>




