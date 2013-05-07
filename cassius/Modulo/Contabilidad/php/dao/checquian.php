<?php
include "daoConnection.php";
	 // Object represents table 'descripcion'

	class che{
		
		 private $id;		 
		
		 public function getId(){
			 return $this->id;		 
		 } 
		 public function setId($id){
			 $this->id = $id;
		 } 
    }

class Checking{

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

	function chequiar($cedula){
	   $newChe = new che();

		$sql="SELECT nodocumento FROM funcionarios WHERE nodocumento = '".$cedula."'";

		
        	$rs_User = $this->daoConnection->consulta($sql);
            $this->daoConnection->leerVarios();
 
            $num_rows=mysql_num_rows($rs_User);


        	$newChe->setId($this->daoConnection->ObjetoConsulta2);


            $GLOBALS['che1']=$num_rows;
          
             return null;      	

      }

}

?>