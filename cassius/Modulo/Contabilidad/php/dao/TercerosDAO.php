<?php
class TercerosDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}
 
	function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }
	
	function getList(){

        $sql = 'SELECT * from terceros';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }

        for($i = 0; $i < $numregistros ; $i++){
            $newTerceros= new terceros();
          
           $newTerceros->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newTerceros->setTipodocumento($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newTerceros->setNodocumento($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newTerceros->setNombretercero($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newTerceros->setDireccion($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newTerceros->setTelefono($this->daoConnection->ObjetoConsulta2[$i][5]);
			$newTerceros->setEmail($this->daoConnection->ObjetoConsulta2[$i][6]);
			$newTerceros->setRegimen($this->daoConnection->ObjetoConsulta2[$i][7]);
			/*lusestela*/
			
            $lista[$i] = $newTerceros;
        }
        return $lista;
    }

    function get($id){
           
        $newTerceros = new terceros();

        $sql= 'SELECT idterceros,Sigla, nodocumento, nombretercero, 
        direccion, telefono,email,regimen, 
        tipotercero, idunidadv 
        FROM terceros INNER JOIN identificacion 
        WHERE idterceros="'.mysql_real_escape_string($id).'"
        && IdTipoidentificacion = tipodocumento';
        

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }
		
		$i = 0;
			 
            $newTerceros->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newTerceros->setTipodocumento($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newTerceros->setNodocumento($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newTerceros->setNombretercero($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newTerceros->setDireccion($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newTerceros->setTelefono($this->daoConnection->ObjetoConsulta2[$i][5]);
			$newTerceros->setEmail($this->daoConnection->ObjetoConsulta2[$i][6]);
			$newTerceros->setRegimen($this->daoConnection->ObjetoConsulta2[$i][7]);
            $newTerceros->setTipoter($this->daoConnection->ObjetoConsulta2[$i][8]);

        return $newTerceros;
    }
	function Validar_tercero($documento){
        
        $newTerceros = new terceros();
        $sql = 'SELECT * from terceros where nodocumento = "'.$documento.'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        if($numregistros == 0){
            return null;
        }	

		$i = 0;			 
            $newTerceros->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newTerceros->setTipodocumento($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newTerceros->setNodocumento($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newTerceros->setNombretercero($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newTerceros->setDireccion($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newTerceros->setTelefono($this->daoConnection->ObjetoConsulta2[$i][5]);
			$newTerceros->setEmail($this->daoConnection->ObjetoConsulta2[$i][6]);
			$newTerceros->setRegimen($this->daoConnection->ObjetoConsulta2[$i][7]);


        //$noticiaToPoblate = $newnoticia;
        return $newTerceros;

    }	
	function Validar_tercero2($tercero){

        $newTerceros = new terceros();

        $sql = 'SELECT * from terceros where nombretercero = "'.mysql_real_escape_string($tercero).'"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }
		
		$i = 0;
			 
            $newTerceros->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newTerceros->setTipodocumento($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newTerceros->setNodocumento($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newTerceros->setNombretercero($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newTerceros->setDireccion($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newTerceros->setTelefono($this->daoConnection->ObjetoConsulta2[$i][5]);
			$newTerceros->setEmail($this->daoConnection->ObjetoConsulta2[$i][6]);
			$newTerceros->setRegimen($this->daoConnection->ObjetoConsulta2[$i][7]);

        //$noticiaToPoblate = $newnoticia;
        return $newTerceros;

    }
	
	function Validar_tercero_nombre($tercero){

        $newTerceros = new terceros();

        $sql = 'SELECT * from terceros where nombretercero LIKE "%'.mysql_real_escape_string($tercero).'%"';
		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }
		
		$i = 0;
			 
            $newTerceros->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newTerceros->setTipodocumento($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newTerceros->setNodocumento($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newTerceros->setNombretercero($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newTerceros->setDireccion($this->daoConnection->ObjetoConsulta2[$i][4]);
			$newTerceros->setTelefono($this->daoConnection->ObjetoConsulta2[$i][5]);
			$newTerceros->setEmail($this->daoConnection->ObjetoConsulta2[$i][6]);
			$newTerceros->setRegimen($this->daoConnection->ObjetoConsulta2[$i][7]);

        //$noticiaToPoblate = $newnoticia;
        return $newTerceros;

    }
    /**
     * [save ->esta funcion inserta los datos de los terceros]
     * @param  [type=objeto] $obj [resive informacion de la clase terceros url php/entities/terceros.php]
     * @return [type]      [description]
     */
	function save($obj){
        $newTerceros = new terceros();
        $newTerceros = $obj;
        $querty =   "insert into terceros
                    (tipodocumento,nodocumento,nombretercero,direccion,telefono,email,regimen,Estado,tipotercero) VALUES ('".mysql_real_escape_string($newTerceros->getTipodocumento())."', '".mysql_real_escape_string($newTerceros->getNodocumento())."', '".mysql_real_escape_string($newTerceros->getNombretercero())."', '".mysql_real_escape_string($newTerceros->getDireccion())."', '".mysql_real_escape_string($newTerceros->getTelefono())."', '".mysql_real_escape_string($newTerceros->getEmail())."', '".mysql_real_escape_string($newTerceros->getRegimen())."',1,'".mysql_real_escape_string($newTerceros->getTipoter())."')";

        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveTerceros): '.mysql_error();
            return false;
        } else
         {
         	echo "<script type='text/javascript'>alert('Guardo correctamente');</script>";
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
		if($newTerceros->getTipoter())  
             $update_fields[8]="tipotercero = '".mysql_real_escape_string($newTerceros->getTipoter())."'";       
        	 	 	
        
        $querty =   "UPDATE terceros SET ".implode(",",$update_fields)." WHERE idterceros= '".$newTerceros->getId()."' ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveTerceros): '.mysql_error();
            return false;
        }
        return true;
    }

	 function delete($id){
             //$id -> numero de documento

			$sql = 'update terceros  set  Estado = 0 where  nodocumento ='.$id;

			$this->daoConnection->consulta($sql);
	}
    function activar($id){
             //$id -> numero de documento

            $sql = 'update terceros  set  Estado = 1 where  nodocumento ='.$id;

            $this->daoConnection->consulta($sql);
    }

     function total($opt = 0, $campo = 0, $valor = 0){

		if($opt == 0)
			$sql = 'select count(*) from terceros;';

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

		return $this->daoConnection->ObjetoConsulta2[0][0];

	}	

   


}

?>
