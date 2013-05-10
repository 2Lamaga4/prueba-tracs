<?php
function fecha($str){
    $date = strtotime($str);
	$dia= date("Y-m-d", $date); // Year (2003)
	if(date("Y-m-d")==$dia)
		return "Hoy a las  ".date("H:i a",$date);
	else
		return date("d/m/Y",$date);
	}

?>