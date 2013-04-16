<?php 
include "operacionesbasicas.php";
class opererar extends Operaciones {
	var $consulta="";
	var $respuesta;
	function modificarcenas($cuenta){
	
	$this->consulta="UPDATE puc SET cuenta=[value-2],denominacion =[value-3],descripcion=[value-4],estado=[value-5],nivel=[value-6] WHERE cuenta=$cuenta";
	$this->respuest=executeQuery($this->consulta);
	if($this->respueta)
    	{
    		echo "<script type='text/javascript'>
    			alert('modificado con exito');
    		</sript>";
    	}
	}
}

?>