<?php
require_once 'daoconnecion.php';

class Operaciones extends conexion
{

  var $coneccion;
  var $consulta;
  var $resultados;

  function executeQuery($cons)  
  {
    if($this->consulta= mysql_query($cons,$this->getConexion()))
      {
      	    return $this->consulta;
      }


  } 
  
}