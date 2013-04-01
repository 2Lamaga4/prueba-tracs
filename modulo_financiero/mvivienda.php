<?php

include ("conexion.php");

$conecct = new conexion();

$page	= $_REQUEST['page'];
$q		= $_REQUEST['q'];

	$hoy = date("Y/m/d H:i:s");
	
	$sql = "UPDATE unidadv SET Apartamento = '$_POST[identifica]', Descripcion = '$_POST[descripcion_vivienda]', Coheficiente = '$_POST[coeficiente]', Matinmobiliaria = '$_POST[matricula]', Fecha_Modificacion = '$hoy' WHERE IdUnidadV = '$_POST[id]';";
	
	//echo $sql;
		
	/*
	{
		echo '<script language="javascript" >';
		echo 'alert("Ya Existe!!");';
		echo '</script>';
	}*/

	
	
	if(!empty($_POST['identifica'])){
		
		//echo $sql;
		$conecct->anexa($sql);
	}
	$conecct->cerrar();
	
	header("location:buscador.php?page=$page&q=$q&e=1");
?>