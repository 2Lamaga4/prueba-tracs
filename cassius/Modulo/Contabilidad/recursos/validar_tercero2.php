<?php
include "../php/dao/daoConnection.php";
include "../php/dao/TercerosDAO.php";
include "../php/entities/terceros.php";

$TercerosDAO = new TercerosDAO();
$terceros = new terceros();

$numero = "";
if(isset($_REQUEST['numero']) != ""){
	$numero = $_REQUEST['numero'];
}

$num = "";
if(isset($_REQUEST['num']) != ""){
	$num = $_REQUEST['num'];
}

if($num  != ""){
	$tercero = $TercerosDAO->Validar_tercero($num);
}
if($numero !=""){
  $tercero = $TercerosDAO->Validar_tercero($numero);
}
?>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="74" class="texto_azul" align="left"><strong>Número:</strong></td>
      <td width="226"><input name="numero" type="text" class="textarea_redondo2" id="numero" style="width:200px;" onBlur="validar_existe();" value="<?php if(count(isset($tercero)) == 0 && $num == ""){ echo $numero; }else{ echo $num; } ?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="left"><?php if(count(isset($tercero)) > 0 && $num == ""){ ?><span style="color:#FF0000">* Ya se encuentra registrado este documento.</span><?php } ?></td>
    </tr>
</table>



