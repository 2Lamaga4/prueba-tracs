<?php
include "../php/include_dao.php";
$CuentaDAO = new CuentaDAO();
$cuenta = new cuentas();
$cuentas = $CuentaDAO->getList(1);
$Idcuentas = $CuentaDAO->get($_REQUEST['id']);

$datos = substr($Idcuentas->getCuenta(),0,8);
error_reporting (0);
$nm = 0;

if($_REQUEST['nm'] != ""){
  $nm = $_REQUEST['nm'];
}
include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet"/>
<link href="../contabilidad/css/styleagregar_cuentas_cuentas.css" rel="stylesheet"/>
<script src="../Scripts/codigo.js"></script>
<script src="../Scripts/globos_ayuda.js" ></script>
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/globos_ayuda.js" ></script>
<script src="../Scripts/img.js"></script>
<script >
function grupo(){
	var clase = document.getElementById('clase').value;
	llamarasincrono('combo_grupo.php?id=<?php echo $_REQUEST['id']; ?>&clase='+clase, 'grupo_combo');
	cuenta2();
	subcuenta2();
}

function cuenta(){
	var grupo = document.getElementById('grupo').value;
	llamarasincrono('combo_cuenta.php?id=<?php echo $_REQUEST['id']; ?>&grupo='+grupo, 'cuenta_combo');
	subcuenta2();
}	

function cuenta2(){
	llamarasincrono('combo_cuenta.php?id=<?php echo $_REQUEST['id']; ?>', 'cuenta_combo');
}

function subcuenta(){
	var cuenta = document.getElementById('cuenta').value;
	llamarasincrono('combo_subcuenta.php?id=<?php echo $_REQUEST['id']; ?>&cuenta='+cuenta, 'subcuenta_combo');
}	

function subcuenta2(){
	llamarasincrono('combo_subcuentaa.php?id=<?php echo $_REQUEST['id']; ?>', 'subcuenta_combo');
}

function numero(){
	var subcuenta = document.getElementById('subcuenta').value;
	llamarasincrono('auxiliar.php?id=<?php echo $_REQUEST['id']; ?>&numero='+subcuenta, 'numero');
}

function numero2(){
	llamarasincrono('auxiliar.php?id=<?php echo $_REQUEST['id']; ?>', 'numero');
}

function enviar(){
	var clase = document.getElementById('clase').value;
	if(clase > 0){
		var grupo = document.getElementById('grupo').value;
		var cuenta = document.getElementById('cuenta').value;
		var subcuenta = document.getElementById('subcuenta').value;
		var auxiliar = document.getElementById('auxiliar').value;
		var denominacion = document.getElementById('denominacion').value;
		var descripcion_vivienda = document.getElementById('descripcion_vivienda').value;
	}
	if(clase == 0){
		alert("Seleccione una Clase.");
	}else if(grupo == 0){
		alert("Seleccione un Grupo.");
	}else if(cuenta == 0){
		alert("Seleccione una Cuenta.");
	}else if(subcuenta == 0){
		alert("Seleccione una Subcuenta.");
	}else if(auxiliar == ""){
		alert("Escriba un numero de cuenta Auxiliar.");
		 document.getElementById('auxiliar').focus();
	}else if(denominacion == ""){
		alert("Escriba una denominacion.");
		 document.getElementById('denominacion').focus();
	}else if(descripcion_vivienda == ""){
		alert("Escriba una Descripción de cuenta auxiliar.");
		document.getElementById('descripcion_vivienda').focus();
	}else{
		location.href = "../php/action/editCuenta.php?id=<?php echo $_REQUEST['id']; ?>&subcuenta="+subcuenta+"&auxiliar="+auxiliar+"&denominacion="+denominacion+"&descripcion_vivienda="+descripcion_vivienda;
 }

}
function cerrarVentana(){ 
alert('La Cuenta se ha modificado con exito.');
 window.opener.location.href = window.opener.location.href; 	
  if (window.opener.progressWindow){     
    window.opener.progressWindow.close()
  } 
  window.close(); 
}
</script>

</head>
<body <?php if($_GET['OK'] == 1){?> onload="cerrarVentana();"<?php } ?>  onload="subcuenta2(); cuenta2(); grupo(); numero2()"  class="popup" OnContextMenu="return false">
<?php 
    $view= new stdClass(); 
    $view->disableLayout=false;

    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/modificar_cuenta.php');
    }
?>
</body>
</html>