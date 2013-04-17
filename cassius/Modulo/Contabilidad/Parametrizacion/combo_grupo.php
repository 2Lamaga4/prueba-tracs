<?php include "../php/include_dao.php";

$clase = "";
if($_REQUEST['clase'] != ""){
	$clase = $_REQUEST['clase'] ;
}

$CuentaDAO = new CuentaDAO();
$cuenta = new cuentas();

if(isset($_GET['id'])){
$idd=$_GET['id'];	

if($idd != ""){
	$Idcuentas = $CuentaDAO->get($idd);
	$datos = substr($Idcuentas->getCuenta(),0,7);
}
}




if($clase == ""){
	$cuentasN2 = $CuentaDAO->Lista_Nivel($datos[0].$datos[1],2);
}else{
	$cuentasN2 = $CuentaDAO->Lista_Nivel($clase,2);
}


?>
<span class="texto_azul">
<table width="500" height="40" border="0" cellspacing="0" cellpadding="0"  class="td_nivel2">
  <tr>
    <td width="78"><strong>Grupo:</strong></td>
    <td width="692"><select name="grupo" id="grupo" class="textarea_redondo2" style="width:402px; height:27px;"  onchange="cuenta()">
        <option value="0">--</option>
        <option value="agregar">::::::::::::::::::::::::::::::::::::::::::::::: Agregar grupo :::::::::::::::::::::::::::::::::::::::::::::::::::</option>
         <?php foreach($cuentasN2 as $item2){ 
				$sel = "";
				if($datos[0].$datos[1] == $item2->getCuenta()){
					$sel = "selected";
				}
		 ?>
        <option value="<?php echo $item2->getCuenta(); ?>"<?php echo $sel; ?>><?php echo $item2->getCuenta()." ".$item2->getDenominacion(); ?></option>
         <?php } ?>
    </select></td>
  </tr>
</table>
    
</span>