<?php
class CuentaDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

	
	
	function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }
	
	function getList($nivel){

        $sql = 'SELECT * from puc WHERE nivel = '.$nivel.' order by cuenta';


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array(); 

        if($numregistros == 0){
            return $lista;
        }


        for($i = 0; $i < $numregistros ; $i++){
            $newCuenta = new cuentas();
            $newCuenta->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newCuenta->setCuenta($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newCuenta->setDenominacion($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newCuenta->setDescripcion($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newCuenta->setEstado($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newCuenta->setNivel($this->daoConnection->ObjetoConsulta2[$i][5]);
			
            $lista[$i] = $newCuenta;
        }


        return $lista;
    }
	
	function Lista_Nivel($cuenta,$nivel){

        $sql = 'SELECT * from puc WHERE cuenta LIKE "'.$cuenta.'%" and nivel = '.$nivel.' order by cuenta';


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }


        for($i = 0; $i < $numregistros ; $i++){
            $newCuenta = new cuentas();
            $newCuenta->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newCuenta->setCuenta($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newCuenta->setDenominacion($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newCuenta->setDescripcion($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newCuenta->setEstado($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newCuenta->setNivel($this->daoConnection->ObjetoConsulta2[$i][5]);
			
            $lista[$i] = $newCuenta;
        }


        return $lista;
    }
	
	function get($id){

        $newCuenta = new cuentas();
     
        $sql = 'SELECT * from puc where idpuc = "'.mysql_real_escape_string($id).'"';
     
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }
		
		$i = 0;
			$newCuenta->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newCuenta->setCuenta($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newCuenta->setDenominacion($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newCuenta->setDescripcion($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newCuenta->setEstado($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newCuenta->setNivel($this->daoConnection->ObjetoConsulta2[$i][5]);


        //$noticiaToPoblate = $newnoticia;

        return $newCuenta;

    }
	
	function getCuenta($id){

        $newCuenta = new cuentas();

        $sql = 'SELECT * from puc where cuenta = "'.mysql_real_escape_string($id).'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }
		
		$i = 0;
			$newCuenta->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newCuenta->setCuenta($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newCuenta->setDenominacion($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newCuenta->setDescripcion($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newCuenta->setEstado($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newCuenta->setNivel($this->daoConnection->ObjetoConsulta2[$i][5]);


        //$noticiaToPoblate = $newnoticia;

        return $newCuenta;

    }
    
	function save($obj){
        $newcuentas = new cuentas;
        $newcuentas = $obj;

        $querty =   "insert into puc
                    (cuenta,denominacion,descripcion,estado,nivel) VALUES ('".mysql_real_escape_string($newcuentas->getCuenta())."', '".mysql_real_escape_string($newcuentas->getDenominacion())."', '".mysql_real_escape_string($newcuentas->getDescripcion())."', '".mysql_real_escape_string($newcuentas->getEstado())."', '".mysql_real_escape_string($newcuentas->getNivel())."')";

        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveCuenta): '.mysql_error();
            return false;
        }

        return true;

    }


    function update($obj){
        $newcuentas = new cuentas;
        $newcuentas = $obj;
		$update_fields=array();
		if($newcuentas->getCuenta())  
			 $update_fields[1]="cuenta = '".mysql_real_escape_string($newcuentas->getCuenta())."'"; 
		if($newcuentas->getDenominacion())  
			 $update_fields[2]="denominacion = '".mysql_real_escape_string($newcuentas->getDenominacion())."'"; 
		if($newcuentas->getDescripcion())  
			 $update_fields[3]="descripcion = '".mysql_real_escape_string($newcuentas->getDescripcion())."'"; 

		
        $querty =   "UPDATE puc SET ".implode(",",$update_fields)." WHERE idpuc = '".$newcuentas->getId()."' ";
        //echo $querty.'<br />';
        //
      
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveCuenta): '.mysql_error();
            return false;
        }

        return true;
    }


	 function delete($id){

			$sql = 'Delete from puc WHERE idpuc = '.$id.' ';

			$this->daoConnection->consulta($sql);
	}

     function total($opt = 0, $campo = 0, $valor = 0){

		if($opt == 0)
			$sql = 'select count(*) from descripcion;';


        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

		return $this->daoConnection->ObjetoConsulta2[0][0];

	}

}

?>
