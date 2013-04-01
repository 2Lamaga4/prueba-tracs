<?php
class AfectaDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

	
	
	function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }
	
	function getList($id){

        $sql = 'SELECT * from afecta WHERE iddocumentos = '.$id;


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }


        for($i = 0; $i < $numregistros ; $i++){
            $newAfecta = new afecta();
            $newAfecta->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newAfecta->setIddocumentos($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newAfecta->setIdpuc($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newAfecta->setTipo($this->daoConnection->ObjetoConsulta2[$i][3]);
			
			
            $lista[$i] = $newAfecta;
        }


        return $lista;
    }
	
	function getList2($id,$iddoc){

        $sql = 'SELECT * from afecta WHERE idpuc = '.$id.' and iddocumentos = '.$iddoc;


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }


        $i = 0;
            $newAfecta = new afecta();
            $newAfecta->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newAfecta->setIddocumentos($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newAfecta->setIdpuc($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newAfecta->setTipo($this->daoConnection->ObjetoConsulta2[$i][3]);



        return $newAfecta;
    }
	
	function save($obj){
        $newAfecta = new afecta();
        $newAfecta = $obj;

        $querty =   "insert into afecta
                    (iddocumentos,idpuc,tipo) VALUES ('".mysql_real_escape_string($newAfecta->getIddocumentos())."', '".mysql_real_escape_string($newAfecta->getIdpuc())."', '".mysql_real_escape_string($newAfecta->getTipo())."')";

        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveAfecta): '.mysql_error();
            return false;
        }

        return true;

    }

	function delete($id){

			$sql = 'Delete from afecta WHERE iddocumentos = '.$id;
			$this->daoConnection->consulta($sql);
	}
	
	function delete2($id){

			$sql = 'Delete from afecta WHERE idafecta = '.$id;
			$this->daoConnection->consulta($sql);
	}

}

?>
