<?php
class DocumentoDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

	
	
	function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }
	
	function getList(){

        $sql = 'SELECT * from documentos';


		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }


        for($i = 0; $i < $numregistros ; $i++){
            $newDocumentos= new documentos();
            $newDocumentos->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newDocumentos->setSigla($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newDocumentos->setNombredoc($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newDocumentos->setDescripcion($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newDocumentos->setCtasafecta($this->daoConnection->ObjetoConsulta2[$i][4]);
			
            $lista[$i] = $newDocumentos;
        }


        return $lista;
    }
	
	
	
	function get($id){

        $newDocumentos= new documentos();

        $sql = 'SELECT * from documentos where iddocumentos = "'.mysql_real_escape_string($id).'"';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }
		
		$i = 0;
			 
            $newDocumentos->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$newDocumentos->setSigla($this->daoConnection->ObjetoConsulta2[$i][1]);
			$newDocumentos->setNombredoc($this->daoConnection->ObjetoConsulta2[$i][2]);
			$newDocumentos->setDescripcion($this->daoConnection->ObjetoConsulta2[$i][3]);
			$newDocumentos->setCtasafecta($this->daoConnection->ObjetoConsulta2[$i][4]);


        //$noticiaToPoblate = $newnoticia;

        return $newDocumentos;

    }
	
	function Max(){

        $newDocumentos= new documentos();

     	 $sql = 'select MAX(iddocumentos) as id from documentos;';

		$this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }
		
		$i = 0;
			 
            $newDocumentos->setId($this->daoConnection->ObjetoConsulta2[$i][0]);


        //$noticiaToPoblate = $newnoticia;

        return $newDocumentos;

    }
	
    
	function save($obj){
        $newDocumentos= new documentos();
        $newDocumentos = $obj;

        $querty =   "insert into documentos
                    (sigla,nombredoc,descripcion) VALUES ('".mysql_real_escape_string($newDocumentos->getSigla())."', '".mysql_real_escape_string($newDocumentos->getNombredoc())."', '".mysql_real_escape_string($newDocumentos->getDescripcion())."')";

        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveDocumento): '.mysql_error();
            return false;
        }

        return true;

    }


    function update($obj){
        $newDocumentos = new documentos;
        $newDocumentos = $obj;
		
		$update_fields=array();
		if($newDocumentos->getSigla())  
			 $update_fields[1]="sigla = '".mysql_real_escape_string($newDocumentos->getSigla())."'"; 
		if($newDocumentos->getNombredoc())  
			 $update_fields[2]="nombredoc = '".mysql_real_escape_string($newDocumentos->getNombredoc())."'"; 
		if($newDocumentos->getDescripcion())  
			 $update_fields[3]="descripcion = '".mysql_real_escape_string($newDocumentos->getDescripcion())."'"; 

		
        $querty =   "UPDATE documentos SET ".implode(",",$update_fields)." WHERE iddocumentos = '".$newDocumentos->getId()."' ";
        //echo $querty.'<br />';
        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveDocumentos): '.mysql_error();
            return false;
        }

        return true;
    }


	 function delete($id){

			$sql = 'Delete from documentos WHERE iddocumentos = '.$id;

			$this->daoConnection->consulta($sql);
	}

     function total($opt = 0, $campo = 0, $valor = 0){

		if($opt == 0)
			$sql = 'select count(*) from puc;';


        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

		return $this->daoConnection->ObjetoConsulta2[0][0];

	}
	
	

}

?>
