<?php
include "../php/dao/daoConnection.php";
include "../php/entities/terceros.php";
class TerceroDAO{

    public $daoConnection;

    function __construct(){
        $this->daoConnection = new DAO;
        $this->daoConnection->conectar();
    }

    
   
    function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }
    
    function getList(){

        $sql = 'SELECT Sigla,nodocumento,nombretercero,idterceros
                FROM terceros INNER JOIN identificacion WHERE 
                tipodocumento = IdTipoidentificacion && estado = 1 
                 && tipotercero = 1 ORDER BY(nombretercero)';


        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }


        for($i = 0; $i < $numregistros ; $i++){

            $newTerceros = new terceros();

            $newTerceros->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newTerceros->setNodocumento($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newTerceros->setnombretercero($this->daoConnection->ObjetoConsulta2[$i][2]);  
            $newTerceros->setTipodocumento($this->daoConnection->ObjetoConsulta2[$i][3]); 


            $lista[$i] = $newTerceros;
        }
        return $lista;
    } 
    function getListC(){

        $sql = 'SELECT Sigla,nodocumento,nombretercero,idterceros
               FROM terceros INNER JOIN identificacion 
               WHERE tipodocumento = IdTipoidentificacion && estado = 1  && tipotercero = 2 ORDER BY(nombretercero)';


        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }


        for($i = 0; $i < $numregistros ; $i++){

            $newTerceros = new terceros();

            $newTerceros->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newTerceros->setNodocumento($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newTerceros->setnombretercero($this->daoConnection->ObjetoConsulta2[$i][2]);  
            $newTerceros->setTipodocumento($this->daoConnection->ObjetoConsulta2[$i][3]); 


            $lista[$i] = $newTerceros;
        }
        return $lista;
    } 






    function getList2(){

        $sql = 'SELECT Sigla,nodocumento,nombretercero,idterceros
                FROM terceros INNER JOIN identificacion WHERE 
                tipodocumento = IdTipoidentificacion && estado = 0
                 && tipotercero = 1 ORDER BY(nombretercero)';


        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }


        for($i = 0; $i < $numregistros ; $i++){

            $newTerceros = new terceros();

            $newTerceros->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newTerceros->setNodocumento($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newTerceros->setnombretercero($this->daoConnection->ObjetoConsulta2[$i][2]);  
            $newTerceros->setTipodocumento($this->daoConnection->ObjetoConsulta2[$i][3]); 


            $lista[$i] = $newTerceros;
        }
        return $lista;
    } 
    function getList2C(){

        $sql = 'SELECT Sigla,nodocumento,nombretercero,idterceros
                FROM terceros INNER JOIN identificacion WHERE 
                tipodocumento = IdTipoidentificacion && estado = 0
                 && tipotercero = 2 ORDER BY(nombretercero)';


        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();

        $lista=array();

        if($numregistros == 0){
            return $lista;
        }


        for($i = 0; $i < $numregistros ; $i++){

            $newTerceros = new terceros();

            $newTerceros->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
            $newTerceros->setNodocumento($this->daoConnection->ObjetoConsulta2[$i][1]);
            $newTerceros->setnombretercero($this->daoConnection->ObjetoConsulta2[$i][2]);  
            $newTerceros->setTipodocumento($this->daoConnection->ObjetoConsulta2[$i][3]); 


            $lista[$i] = $newTerceros;
        }
        return $lista;
    } 


}
?>
