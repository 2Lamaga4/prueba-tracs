<?php include "php/include_dao.php";

$TercerosDAO = new TercerosDAO();
$terceros = new terceros();

$numero = "";
if($_REQUEST['numero'] != ""){
	$numero = $_REQUEST['numero'];
}

if($numero != ""){
	$tercero = $TercerosDAO->Validar_tercero($numero);    
 }

?>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="74" class="texto_azul" align="left"><strong>Número:</strong></td>
      <td width="226">
      	<input name="numero" type="text" class="textarea_redondo2" id="numero" 
      	style="width:200px;" onBlur="validar_existe();"
      	 value="<?php  echo $numero; ?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="left">
      	<?php if(count($tercero) > 0){ ?>
      	<span style="color:#FF0000">
      		* Ya se encuentra registrado este documento.</span><?php }else{ 
           echo "<span style='color:#000'>encuentra</span>";
      			 }?></td>
    </tr>
</table>

