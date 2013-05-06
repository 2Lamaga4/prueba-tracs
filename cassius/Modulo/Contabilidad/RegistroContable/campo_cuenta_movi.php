<?php session_start();
$n = 0;
if(isset($_REQUEST['n']) != ""){
	$n = $_REQUEST['n'];
    
}


if(isset($_REQUEST['id']) != ""){
	unset($_SESSION['arreglo'][$_REQUEST['id']]);
	unset($_SESSION['arreglo']);
	$_SESSION['numero'] = $_SESSION['numero'] - 1;
}else{

	$_SESSION['numero'] =
     isset($_SESSION['numero']) + $n;
}

for($a = 0; $a < $_SESSION['numero']; $a++){
	$_SESSION['arreglo'][$a] = $a;
}


 
?>
<?php if(isset($_REQUEST['n']) > 0){ ?>
<table width="725" border="0" align="center" cellpadding="0" cellspacing="2">
<?php if($_REQUEST['n'] == 2){ ?>
    <tr>
        <td height="30" width="16" class="td_resaltado_azul">&nbsp;</td>
        <td width="203" height="30" class="td_resaltado_azul">Cuenta</td>
        <td width="285" class="td_resaltado_azul">Descripción</td>
        <td width="110" align="center" class="td_resaltado_azul">Débito</td>
        <td width="99" align="center" class="td_resaltado_azul">Crédito</td>
    </tr>
<?php } ?>
<?php if(isset($id) != $n){ ?>
 <tr id="item_nuevo" class="tr_tabla_interna">
    <td height="30"  width="16" valign="middle"><a href="#" onClick="javascript:eliminar_cuenta(<?php echo $_REQUEST['n']; ?>)"> 
        <img src="../images/eliminar.png" width="16" height="16" border="0"></a></td>
    <td height="30" colspan="2" class="td_tabla_interna">
    <table border="0" width="510" >
      <tr>
      
        <td align="left" width="66" ><input name="idcuenta<?php echo $_REQUEST['n']; ?>" type="text" class="textarea_redondo2" id="idcuenta<?php echo $_REQUEST['n']; ?>" style="width:60px;" onKeyUp="javascript:buscar_cuenta(<?php echo $_REQUEST['n']; ?>)" onblur="javascript:valida_cuenta(<?php echo $_REQUEST['n']; ?>); buscar_cuenta(<?php echo $_REQUEST['n']; ?>)" /></td>
        <td width="400" ><div id="cu<?php echo $_REQUEST['n']; ?>"></div></td>
      </tr>
    </table>
    </td>
    <td align="center" class="td_tabla_interna">
        <input name="debito<?php echo $_REQUEST['n']; ?>" type="text" class="textarea_redondo2" id="debito<?php echo $_REQUEST['n']; ?>" style="width:80px;" onKeyUp="javascript:valida_debito(<?php echo $_REQUEST['n']; ?>); sumar_cuentas_d(<?php echo $_REQUEST['n']; ?>)" /></td>
    <td align="center" class="td_tabla_interna">
        <input name="credito<?php echo $_REQUEST['n']; ?>" type="text" class="textarea_redondo2" id="credito<?php echo $_REQUEST['n']; ?>" style="width:80px;" onKeyUp="javascript:valida_credito(<?php echo $_REQUEST['n']; ?>)"   /></td>
  </tr>
<?php } ?>
<?php } ?>

</table>