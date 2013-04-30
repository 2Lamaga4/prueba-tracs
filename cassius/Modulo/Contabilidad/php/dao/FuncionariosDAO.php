<?php
class FuncionariosDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

	
	
	function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }

    function Fun(){  

       $sql = 'SELECT cargos.nombrecargo, identificacion.Sigla, 
				funcionarios.nodocumento,funcionarios.nombres,
				funcionarios.apellidos   FROM funcionarios inner join cargos inner join identificacion where tipodocumento = IdTipoidentificacion && cargo=idcargo';
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }
		
        for($i = 0; $i < $numregistros ; $i++){
           $newFuncionarios = new funcionarios();
			
            $newFuncionarios->setCargoFun($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newFuncionarios->setTipodocumento($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newFuncionarios->setNodocumento($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newFuncionarios->setNombres($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newFuncionarios->setApellidos($this->daoConnection->ObjetoConsulta2[$i][4]);	

            $lista[$i] = $newFuncionarios;
        }
        return $lista;
	}


	function getCargoFun(){  

		

       $sql = 'SELECT idcargo,nombrecargo,descripcion from  cargos';
        $this->daoConnection->consulta($sql);

        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }
		
		$i=0;
         for($i = 0; $i < $numregistros ; $i++){
         $newFuncionarios = new funcionarios();
		 $newFuncionarios->setIdFunCargo($this->daoConnection->ObjetoConsulta2[$i][0]);
		 $newFuncionarios->setCargoFun($this->daoConnection->ObjetoConsulta2[$i][1]);
		 $newFuncionarios->setCargoDes($this->daoConnection->ObjetoConsulta2[$i][2]);
		 
		 $lista[$i] = $newFuncionarios;
		
         }
        return $lista;
	}


	  		 
	function get($cargo){        	
        
        $newFuncionarios = new funcionarios();

/*por id del funcionario*/
        $sql =  'SELECT idfuncionarios,tipodocumento,nodocumento,nombres,
                        apellidos,rutnit,telefono,celular,direccion,cargo,cargos.nombrecargo 
                from funcionarios  inner join cargos 
                where nodocumento="'.mysql_real_escape_string($cargo).'"&& cargo = idcargo ';
        
		$this->daoConnection->consulta($sql);

        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }
		
		$i = 0;
			 
            $newFuncionarios->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newFuncionarios->setTipodocumento($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newFuncionarios->setNodocumento($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newFuncionarios->setNombres($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newFuncionarios->setApellidos($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newFuncionarios->setRutnit($this->daoConnection->ObjetoConsulta2[$i][5]);
			$newFuncionarios->setTelefono($this->daoConnection->ObjetoConsulta2[$i][6]);
			$newFuncionarios->setCelular($this->daoConnection->ObjetoConsulta2[$i][7]);
			$newFuncionarios->setDireccion($this->daoConnection->ObjetoConsulta2[$i][8]);
			$newFuncionarios->setCargo($this->daoConnection->ObjetoConsulta2[$i][9]);
			$newFuncionarios->setCargoFun($this->daoConnection->ObjetoConsulta2[$i][10]);



        return $newFuncionarios;


    }
	
    function update($obj){
       $newFuncionarios = new funcionarios();
       $newFuncionarios = $obj;
		
		$update_fields=array();
		if($newFuncionarios->getTipodocumento())  
			 $update_fields[1]="tipodocumento = '".mysql_real_escape_string($newFuncionarios->getTipodocumento())."'"; 
		if($newFuncionarios->getNodocumento())  
			 $update_fields[2]="nodocumento = '".mysql_real_escape_string($newFuncionarios->getNodocumento())."'"; 
		if($newFuncionarios->getNombres())  
			 $update_fields[3]="nombres = '".mysql_real_escape_string($newFuncionarios->getNombres())."'"; 
		if($newFuncionarios->getDireccion())  
			 $update_fields[4]="apellidos = '".mysql_real_escape_string($newFuncionarios->getApellidos())."'";
		if($newFuncionarios->getTelefono())  
			 $update_fields[5]="rutnit = '".mysql_real_escape_string($newFuncionarios->getRutnit())."'";
		if($newFuncionarios->getTelefono())  
			 $update_fields[6]="telefono = '".mysql_real_escape_string($newFuncionarios->getTelefono())."'";
		if($newFuncionarios->getCelular())  
			 $update_fields[7]="celular = '".mysql_real_escape_string($newFuncionarios->getCelular())."'";	 	 
		if($newFuncionarios->getDireccion())  
			 $update_fields[8]="direccion = '".mysql_real_escape_string($newFuncionarios->getDireccion())."'";		 	 
			 
        $querty =   "UPDATE funcionarios SET ".implode(",",$update_fields)." WHERE cargo = '".$newFuncionarios->getCargo()."' ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveFuncionarios): '.mysql_error();
            return false;
        }

        return true;
    }

    function inset($obj){
       $newFuncionarios = new funcionarios();
       $newFuncionarios = $obj;
		
		$update_fields=array();
		if($newFuncionarios->getTipodocumento())  
			 $update_fields[1]="tipodocumento = '".mysql_real_escape_string($newFuncionarios->getTipodocumento())."'"; 
		if($newFuncionarios->getNodocumento())  
			 $update_fields[2]="nodocumento = '".mysql_real_escape_string($newFuncionarios->getNodocumento())."'"; 
		if($newFuncionarios->getNombres())  
			 $update_fields[3]="nombres = '".mysql_real_escape_string($newFuncionarios->getNombres())."'"; 
		if($newFuncionarios->getDireccion())  
			 $update_fields[4]="apellidos = '".mysql_real_escape_string($newFuncionarios->getApellidos())."'";
		if($newFuncionarios->getTelefono())  
			 $update_fields[5]="rutnit = '".mysql_real_escape_string($newFuncionarios->getRutnit())."'";
		if($newFuncionarios->getTelefono())  
			 $update_fields[6]="telefono = '".mysql_real_escape_string($newFuncionarios->getTelefono())."'";
		if($newFuncionarios->getCelular())  
			 $update_fields[7]="celular = '".mysql_real_escape_string($newFuncionarios->getCelular())."'";	 	 
		if($newFuncionarios->getDireccion())  
			 $update_fields[8]="direccion = '".mysql_real_escape_string($newFuncionarios->getDireccion())."'";		 	 
			 
        $querty =   "INSERT INTO  funcionarios SET ".implode(",",$update_fields)." WHERE cargo = '".$newFuncionarios->getCargo()."' ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveFuncionarios): '.mysql_error();
            return false;
        }

        return true;
    }



	

     function total($opt = 0, $campo = 0, $valor = 0){

		if($opt == 0)
			$sql = 'select count(*) from funcionarios;';


        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

		return $this->daoConnection->ObjetoConsulta2[0][0];

	}
    function tipoDeDocumento(){
    	$sql="select idcargo,nombrecargo from cargos";
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $i=0;
        $objcedu = new cedula();

    }
	
	

}

?>
