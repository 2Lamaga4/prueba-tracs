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
        $i=0;

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
  
    // $sql="SELECT * FROM movimiento WHERE id in(SELECT contador FROM fechacontado WHERE fecha BETWEEN '".$fecha1."' AND '".$fecha2."') ORDER BY fecha desc";
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

        //$sql = 'SELECT * from movimiento WHERE  numero = '.$movi.' ORDER BY fecha desc';
       $sql='SELECT * from movimiento WHERE  numero in(select idmovimi from auxmovimientos WHERE contador='.$movi.') ORDER BY(fecha) desc';
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
    function getMovimiento($idmovimiento){

    }
    function get_documento($id_tipo)
       {

     $newMovimientos = new movimientos();

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

    function mostrarter($id){
         $terceros = new terceros();
         $query="SELECT nombretercero,nodocumento FROM terceros INNER JOIN movimiento WHERE id = ".$id." and idterceros = tercero";
        
         $this->daoConnection->consulta($query);
         $this->daoConnection->leerVarios();
         $numregistros = $this->daoConnection->numregistros();
         $lista=array();
         if($numregistros == 0){
            return null;
        }
         $i=0; 
         for($i = 0; $i < $numregistros ; $i++){
          $terceros->setNombretercero($this->daoConnection->ObjetoConsulta2[$i][0]);
          $terceros->setNodocumento($this->daoConnection->ObjetoConsulta2[$i][1]);
           $lista[$i]=$terceros;
           }
     
           return $lista;
    }

    function mosTerMovi($id){
         
         $query2="SELECT concepto,cuenta,denominacion,debito,credito,nombredoc FROM movimiento INNER JOIN documentos INNER JOIN   movcuentas INNER JOIN puc  where id =  ".$id." and idmovimiento = id and codcuenta=idpuc  and numdoc =  iddocumentos;";
         $this->daoConnection->consulta($query2);
         $this->daoConnection->leerVarios();
         $numregistros2 = $this->daoConnection->numregistros();
          $lista=array();
         if($numregistros2 == 0){
            return null;

         }

          for($i = 0; $i < $numregistros2 ; $i++){
          $newMovimientos = new movimientos();
          $newMovimientos->setConcepto($this->daoConnection->ObjetoConsulta2[$i][0]);
          $newMovimientos->setCodcuenta($this->daoConnection->ObjetoConsulta2[$i][1]);
          $newMovimientos->setDenoinacion($this->daoConnection->ObjetoConsulta2[$i][2]);
          $newMovimientos->setDebito($this->daoConnection->ObjetoConsulta2[$i][3]);
          $newMovimientos->setCredito($this->daoConnection->ObjetoConsulta2[$i][4]);
          $newMovimientos->setDocumen($this->daoConnection->ObjetoConsulta2[$i][5]);
           $lista[$i]=$newMovimientos;
         }
       
          return  $lista;
    }
    
    function updateMovcuentas($obj)
    { 
          $newMovimientos = new movimientos();
          $newMovimientos = $obj;
          $querty = " UPDATE  movcuentas SET codcuenta=".$newMovimientos->getCodcuenta().",debito =".$newMovimientos->getDebito()." ,credito=".$newMovimientos->getCredito()." WHERE idmovcuentas = ".$newMovimientos->getIdmovcuentas()."";
          $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
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
          return 1;
       }
       if($a=0 && $b=0){
         return 2; 
       }

       return 3;
    }
    
        function contar(){
        //var_dump($is);
      
        $sql = "SELECT distinct COUNT(distinct fecha) as item FROM movimiento ";
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numregistros = $this->daoConnection->numregistros();
        $i=0;
        if($numregistros == 0){
            return $lista;
        }
       $a = $this->daoConnection->ObjetoConsulta2[$i][0];
     

       return $a;
    }

    function confir($contdor,$idnumero){
           $sql="SELECT * FROM  auxmovimientos WHERE idmovimi=".$idnumero;
           $this->daoConnection->consulta($sql);
           $this->daoConnection->leerVarios();
            $numregistros = $this->daoConnection->numregistros();
              if($numregistros == 0){
              if($this->inser($contdor,$idnumero)){
                
              }
        }
    }

    function inser ($contador,$idnumero){
      $sql="INSERT INTO auxmovimientos (contador,idmovimi)VALUES(".$contador.",".$idnumero.")";
       $result = mysql_query($sql, $this->daoConnection->Conexion_ID);
          if (!$result){
              echo 'Ooops (saveMovimientosCuenta): '.mysql_error();
              return false;
          }
          return true;
    }

    function confirdato($date,$contador)
    { 
         $sql="SELECT * FROM  fechacontado WHERE fecha='".$date."'";
           $this->daoConnection->consulta($sql);
           $this->daoConnection->leerVarios();
            $numregistros = $this->daoConnection->numregistros();
              if($numregistros == 0){
           
              if($this->inserl($date,$contador)){

              }
    }
  }

//
    function inserl($date,$contador){
         $sql="INSERT INTO fechacontado(fecha,contador )VALUES('".$date."',".$contador.")";
       $result = mysql_query($sql, $this->daoConnection->Conexion_ID);
          if (!$result){
             echo 'Ooops (saveMovimientosCuenta): '.mysql_error();
              return false;
          }
          return true;
    }

    function numerofecha($fecha)
    {
        $con = "SELECT contador FROM fechacontado WHERE fecha='".$fecha."'";
        $this->daoConnection->consulta($con);
        $this->daoConnection->leerVarios();
        $dato= $this->daoConnection->ObjetoConsulta2[0][0];
        return $dato;
    }
    function Insertarmodificar($obj)
    {

    }
    function contarM($id){
        $sql = "SELECT count(*) From movcuentas where idmovimiento =".$id."";
 
         $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $dato= $this->daoConnection->ObjetoConsulta2[0][0];
        return $dato;
    }


}

?>


