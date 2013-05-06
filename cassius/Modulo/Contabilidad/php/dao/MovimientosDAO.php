<?php
class MovimientosDAO{

    public $daoConnection;
    public $iden;
	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

	

	function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }
	
	function getList(){

        $sql = 'SELECT * FROM movimiento GROUP BY(numero) ORDER BY fecha desc';


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }


        for($i = 0; $i < $numregistros ; $i++){
            $newMovimientos= new movimientos();
            $newMovimientos->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newMovimientos->setNumero($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newMovimientos->setfecha($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newMovimientos->setTipodoc($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newMovimientos->setNumdoc($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newMovimientos->setConcepto($this->daoConnection->ObjetoConsulta2[$i][5]);
			$newMovimientos->setEstado($this->daoConnection->ObjetoConsulta2[$i][6]);
			$newMovimientos->setTercero($this->daoConnection->ObjetoConsulta2[$i][7]);
            $lista[$i] = $newMovimientos;
        }


        return $lista;
    }
	
	function getList_fecha($fecha1,$fecha2){

        $sql = 'SELECT * from movimiento WHERE fecha BETWEEN "'.$fecha1.'" AND "'.$fecha2.'" ORDER BY fecha desc';


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }


        for($i = 0; $i < $numregistros ; $i++){
            $newMovimientos= new movimientos();
            $newMovimientos->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newMovimientos->setNumero($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newMovimientos->setfecha($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newMovimientos->setTipodoc($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newMovimientos->setNumdoc($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newMovimientos->setConcepto($this->daoConnection->ObjetoConsulta2[$i][5]);
			$newMovimientos->setEstado($this->daoConnection->ObjetoConsulta2[$i][6]);
			$newMovimientos->setTercero($this->daoConnection->ObjetoConsulta2[$i][7]);
            $lista[$i] = $newMovimientos;
        }


        return $lista;
    }
	
	function getList_movi($movi){

        $sql = 'SELECT * from movimiento WHERE 	numero = '.$movi.' ORDER BY fecha desc';


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }


        for($i = 0; $i < $numregistros ; $i++){
            $newMovimientos= new movimientos();
            $newMovimientos->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newMovimientos->setNumero($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newMovimientos->setfecha($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newMovimientos->setTipodoc($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newMovimientos->setNumdoc($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newMovimientos->setConcepto($this->daoConnection->ObjetoConsulta2[$i][5]);
			$newMovimientos->setEstado($this->daoConnection->ObjetoConsulta2[$i][6]);
			$newMovimientos->setTercero($this->daoConnection->ObjetoConsulta2[$i][7]);
            $lista[$i] = $newMovimientos;
        }


        return $lista;
    }
	
	
	function getList_cuentas($id_movimiento){

        $sql = 'SELECT * from movcuentas WHERE idmovimiento = '.$id_movimiento;


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }


        for($i = 0; $i < $numregistros ; $i++){
            $newMovimientos= new movimientos();
            $newMovimientos->setIdmovcuentas($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newMovimientos->setCodcuenta($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newMovimientos->setDebito($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newMovimientos->setCredito($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newMovimientos->setIdmovimiento($this->daoConnection->ObjetoConsulta2[$i][4]);
            $lista[$i] = $newMovimientos;
        }


        return $lista;
    }
	
	function get_documento($id_tipo){

        $newMovimientos= new movimientos();

        $sql = 'SELECT max(numdoc) as numdoc from movimiento where tipodoc = "'.mysql_real_escape_string($id_tipo).'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }
		
		$i = 0;
			 
			$newMovimientos->setNumdoc($this->daoConnection->ObjetoConsulta2[$i][0]);


        //$noticiaToPoblate = $newnoticia;

        return $newMovimientos;

    }
	
	
	
    
	function save($obj){
        $newMovimientos = new movimientos();
        $newMovimientos = $obj;

        $querty =   "insert into movimiento
                    (numero,fecha,tipodoc,numdoc,concepto,estado,tercero) VALUES ('".mysql_real_escape_string($newMovimientos->getNumero())."', '".mysql_real_escape_string($newMovimientos->getFecha())."', '".mysql_real_escape_string($newMovimientos->getTipodoc())."', '".mysql_real_escape_string($newMovimientos->getNumdoc())."', '".mysql_real_escape_string($newMovimientos->getConcepto())."', '".mysql_real_escape_string($newMovimientos->getEstado())."', '".mysql_real_escape_string($newMovimientos->getTercero())."')";

        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveMovimientos): '.mysql_error();
            return false;
        }

        return true;

    }
	
	
	function save_movimiento_cueta($obj){
        $newMovimientos = new movimientos();
        $newMovimientos = $obj;

        $querty =   "insert into movcuentas
                    (codcuenta,debito,credito,idmovimiento) VALUES (".mysql_real_escape_string($newMovimientos->getCodcuenta()).", ".mysql_real_escape_string($newMovimientos->getDebito()).", ".mysql_real_escape_string($newMovimientos->getCredito()).", ".mysql_real_escape_string($newMovimientos->getIdmovimiento()).")";

        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveMovimientosCuenta): '.mysql_error();
            return false;
        }

        return true;

    }


    function update($obj){
       $newTerceros = new terceros();
        $newTerceros = $obj;
		
		$update_fields=array();
		if($newTerceros->getTipodocumento())  
			 $update_fields[1]="tipodocumento = '".mysql_real_escape_string($newTerceros->getTipodocumento())."'"; 
		if($newTerceros->getNodocumento())  
			 $update_fields[2]="nodocumento = '".mysql_real_escape_string($newTerceros->getNodocumento())."'"; 
		if($newTerceros->getNombretercero())  
			 $update_fields[3]="nombretercero = '".mysql_real_escape_string($newTerceros->getNombretercero())."'"; 
		if($newTerceros->getDireccion())  
			 $update_fields[4]="direccion = '".mysql_real_escape_string($newTerceros->getDireccion())."'";
		if($newTerceros->getTelefono())  
			 $update_fields[5]="telefono = '".mysql_real_escape_string($newTerceros->getTelefono())."'";
		if($newTerceros->getEmail())  
			 $update_fields[6]="email = '".mysql_real_escape_string($newTerceros->getEmail())."'";
		if($newTerceros->getRegimen())  
			 $update_fields[7]="regimen = '".mysql_real_escape_string($newTerceros->getRegimen())."'";	 	 
			 	 
		
        $querty =   "UPDATE terceros SET ".implode(",",$update_fields)." WHERE idterceros = '".$newTerceros->getId()."' ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveTerceros): '.mysql_error();
            return false;
        }

        return true;
    }


	 function delete($id){

			$sql = 'Delete from terceros WHERE idterceros = '.$id;

			$this->daoConnection->consulta($sql);
	}

     function total($opt = 0, $campo = 0, $valor = 0){

		if($opt == 0)
			$sql = 'select count(*) from terceros;';


        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

		return $this->daoConnection->ObjetoConsulta2[0][0];

	}
	
	
	 function max_id(){



		$sql = 'SELECT MAX(id) FROM movimiento';
		 $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

		return $this->daoConnection->ObjetoConsulta2[0][0];	
	}

    function suma($is){
        //var_dump($is);
        $this->iden=$is;
        $sql = "SELECT SUM(debito) ,SUM(credito) FROM  movcuentas WHERE idmovimiento =".$this->iden;
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();
        $i=0;
        if($numregistros == 0){
            return $lista;
        }
       $a = $this->daoConnection->ObjetoConsulta2[$i][0];
       $b = $this->daoConnection->ObjetoConsulta2[$i][1];
       if($a!=$b){
          return false;
       }

       return true;
    }
	
	

}

?>
