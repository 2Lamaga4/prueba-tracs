<?php
include "daoConnection.php";
class Checking{

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

	function chequiar($cedula){
		$query="SELECT nodocumento FROM funcionarios WHERE nodocumento = '".$cedula."'";
		$this->daoConnection->consulta($query);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return mysql_num_rows($this->daoConnection->consulta($query));
        }
        	return mysql_num_rows($this->daoConnection->consulta($query));
	}
}


?>