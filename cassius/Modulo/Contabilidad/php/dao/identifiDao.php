<?php 

class TipoIDentifiDao
{   
    public $daoConnection;

    function __construct(){
        $this->daoConnection = new DAO;
        $this->daoConnection->conectar();
    }


	function tipoDeDocumento(){
        
        

    	$sql="SELECT idTipoidentificacion,Sigla FROM identificacion";

        $this->daoConnection->consulta($sql);

        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        if($numregistros == 0){
            return null;
        }
        $i=0;
         for($i = 0; $i < $numregistros ; $i++){
        $objcedu = new cedula();  
        $objcedu->setIdTipo($this->daoConnection->ObjetoConsulta2[$i][0]);
        $objcedu->setSigla($this->daoConnection->ObjetoConsulta2[$i][1]);

        $lista[$i] = $objcedu;
        }
        return  $lista;

    }
}

?>