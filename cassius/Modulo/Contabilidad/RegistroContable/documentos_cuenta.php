<?php session_start();
include "../php/include_dao.php";

$id_documento = 0;
if($_REQUEST['documento'] != ""){
	$id_documento = $_REQUEST['documento'];
}

$AfectaDAO = new AfectaDAO();
$afecta = new afecta();

$CuentaDAO = new CuentaDAO();
$cuentas = new cuentas();

if($id_documento != 0){
	$afectas = $AfectaDAO->getList($id_documento);
}


?>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="2">
<?php 
if(isset($afectas)){
if(count($afectas)> 0 ){ 
  $i = 0;
?>
  <tr>
        <td height="30" class="td_resaltado_azul">Cuenta</td>
        <td width="471" class="td_resaltado_azul">Descripción</td>
        <td class="td_resaltado_azul">Débito</td>
        <td class="td_resaltado_azul">Crédito</td>
    </tr>
<?php   
  foreach($afectas as $item){
    $cuenta = $CuentaDAO->get($item->getIdpuc());
    unset($_SESSION['arreglo']);
      unset($_SESSION['numero']);
?>
  
    <tr class="tr_tabla_interna">
    <td width="80" height="30" class="td_tabla_interna"><?php echo $cuenta->getCuenta(); ?></td>
    <td class="td_tabla_interna"><?php echo $cuenta->getDenominacion(); ?></td>
     <td class="td_tabla_interna"><input name="debito<?php echo $item->getId(); ?>" type="text" class="textarea_redondo2" id="debito<?php echo $item->getId();; ?>" style="width:80px;" <?php if($item->getTipo() == "Crédito"){ ?>disabled="disabled"<?php } ?> /></td>
    <td class="td_tabla_interna"><input name="credito<?php echo $item->getId(); ?>" type="text" class="textarea_redondo2" id="credito<?php echo $item->getId();; ?>" style="width:80px;" <?php if($item->getTipo() == "Débito"){ ?>disabled="disabled"<?php } ?>  /></td>
  </tr>
   
<?php }
 $i++;
}else{ ?>
   <?php for($a = 1; $a <= 50; $a++){ ?>
        <div id="compo_cuenta_m<?php echo $a; ?>"></div>
   <?php } ?> 
        <tr class="tr_tabla_interna" id="tb_item" >
          <td height="30" colspan="5" class="td_tabla_interna" align="left"><div id="agregar_i"></div></td>
       </tr>
<?php }

} else{ ?>
   <?php for($a = 1; $a <= 50; $a++){ ?>
        <div id="compo_cuenta_m<?php echo $a; ?>"></div>
   <?php } ?> 
        <tr class="tr_tabla_interna" id="tb_item" >
          <td height="30" colspan="5" class="td_tabla_interna" align="left"><div id="agregar_i"></div></td>
       </tr>
<?php }?>




</table>