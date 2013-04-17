<?php 
include "../php/include_dao.php";
$grupo = "";

if(isset($_GET['grupo'])){
$grupos=$_GET['grupo'];
	if($grupos != ""){
	$grupo = $grupos ;
	}
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

if($grupo == ""){
	$cuentasN3 = $CuentaDAO->Lista_Nivel($datos[0].$datos[1],3);

}else{
	$cuentasN3 = $CuentaDAO->Lista_Nivel($grupo,3);
}

?>
<span class="texto_azul">

     <select name="cuenta" id="cuenta" class="textarea_redondo2"  style="width:349px; height:27px;" onchange="subcuenta()">
        <option value="0">--</option>
        <option value="agregar">::::::::::::::::::::::::::::::::::::::: Agregar cuenta :::::::::::::::::::::::::::::::::::::::</option>
         <?php  if($grupo != "" || $_REQUEST['id'] != ""){
			 foreach($cuentasN3 as $item3){ 
				 $sel = "";
				if($datos[0].$datos[1].$datos[2].$datos[3] == $item3->getCuenta()){
					$sel = "selected";
				}
			 ?>
			<option value="<?php echo $item3->getCuenta(); ?>" <?php echo $sel; ?>><?php echo $item3->getCuenta()." ".$item3->getDenominacion(); ?></option>
         <?php }
		 } ?>
    </select>
</span>
