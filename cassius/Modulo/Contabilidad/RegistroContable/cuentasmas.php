<?php //session_start();
$n = 1;

if(isset($_REQUEST['n']) != ""){
	$n = $_REQUEST['n'];

}
?>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="2">
<tr class="tr_tabla_interna">
    <td height="30" colspan="4" class="td_tabla_interna">
    <div id="contenidos1"></div>
    <a id = '1' href="#" onclick="javascript:cargar(<?php echo $n;?>,<?php echo $n; ?>);">Agregar Cuenta</a></td>
</tr>
</table>  