<?php
 include "php/include_dao.php";

$cuenta1 = "";

if(isset($_GET['cuenta'])){
$cuenta2=$_GET['cuenta'];	
	if($cuenta2 != ""){
	$cuenta1 = $cuenta2;
	}
}

$CuentaDAO = new CuentaDAO();
$cuenta = new cuentas();

if(isset($_GET['id'])){
	$idd=$_GET['id'];
	if($idd != ""){
	$Idcuentas = $CuentaDAO->get($idd );
	$datos = substr($Idcuentas->getCuenta(),0,7);
	}
}


if($cuenta1 == ""){
	$cuentasN4 = $CuentaDAO->Lista_Nivel($datos[0].$datos[1].$datos[2].$datos[3],4);
}else{
	$cuentasN4 = $CuentaDAO->Lista_Nivel($cuenta1,4);
}


?>
<span class="texto_azul">
     <select  name="subcuenta" id="subcuenta" class="textarea_redondo2" style="width:342px; height:27px;" onchange="numero()">
        <option value="0">--</option>
         <?php  if($cuenta1 != "" || $_REQUEST['id'] != ""){
			 foreach($cuentasN4 as $item4){
			$sel = "";
			if($datos[0].$datos[1].$datos[2].$datos[3].$datos[4].$datos[5] == $item4->getCuenta()){
				$sel = "selected";
			}
		?>
			<option value="<?php echo $item4->getCuenta(); ?>" 
				<?php echo $sel; ?>>
				<?php echo $item4->getCuenta()." ".$item4->getDenominacion(); ?>				
			</option>						
         <?php }
		 } ?>
    </select>
</script>
</span>
