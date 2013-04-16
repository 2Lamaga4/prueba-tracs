<?php

	function QuotesToQuote($mensaje){
    $mensaje = str_replace("\"","'",$mensaje);
    return $mensaje;
	}

?>
