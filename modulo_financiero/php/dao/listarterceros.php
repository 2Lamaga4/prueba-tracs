<?php 
include daoConnection.php
class sQuery  extends DAO
{

	var $coneccion;
	var $consulta;
	var $resultados;
	function sQuery()  
	{
		$this->coneccion= new Conexion();
	}
	function executeQuery($cons)  
	{
		$this->consulta= mysql_query($cons,$this->coneccion->getConexion());
		return $this->consulta;
	}	
	function getResults()   
	{return $this->consulta;}
	
	function Close()
	{$this->coneccion->Close();}	
	
	function Clean() 
	{mysql_free_result($this->consulta);}
	
	function getResultados() 
	{return mysql_affected_rows($this->coneccion->getConexion()) ;}
	
	function getAffect() 
	{return mysql_affected_rows($this->coneccion->getConexion()) ;}

    function fetchAll()
    {
        $rows=array();
		if ($this->consulta)
		{
			while($row=  mysql_fetch_array($this->consulta))
			{
				$rows[]=$row;
			}
		}
        return $rows;
    }
}




class Cliente 
{
	var $Apartamentos;     
	var $Coheficientes;
	var $Matinmobiliarias;
	Var $Descripciones;
	Var $id;

    public static function getClientes() 
		{
			$obj_cliente=new sQuery();
			$obj_cliente->executeQuery("select * from unidadv"); 

			return $obj_cliente->fetchAll(); 
		}

	function Cliente($nro=0) 
	{
		if ($nro!=0)
		{
			$obj_cliente=new sQuery();
			$result=$obj_cliente->executeQuery("select * from unidadv where IdUnidadV = $nro"); 
			$row=mysql_fetch_array($result);
			$this->id=$row['IdUnidadV'];
			$this->Apartamentos=$row['Apartamento'];
			$this->Coheficientes=$row['Descripcion'];
			$this->Matinmobiliarias=$row['Coheficiente'];
			$this->Descripciones=$row['Matinmobiliaria'];
		}
	}
		
		
	function getID()
	 { return $this->id;}
	function getApartamentos()
	 { return $this->Apartamentos;}
	function getCoheficientes()
	 { return $this->Coheficientes;}
	function getMatinmobiliarias()
	 { return $this->Matinmobiliarias;}
	function getDescripciones()
	 { return $this->Descripciones;}
	 
		
	function setApartamentos($val)
	 { $this->Apartamentos=$val;}
	function setCoheficientes($val)
	 {  $this->Coheficientes=$val;}
	function setMatinmobiliarias($val)
	 {  $this->Matinmobiliarias=$val;}
	function setDescripciones($val)
	 {  $this->Descripciones=$val;}

    function save()
    {
        if($this->id)
        {$this->updateCliente();}
        else
        {$this->insertCliente();}
    }
	private function updateCliente()	
	{
			$obj_cliente=new sQuery();
			$query="update unidadv set Apartamento='$this->Apartamentos', Descripcion='$this->Coheficientes',Coheficiente='$this->Matinmobiliarias',Matinmobiliaria='$this->Descripciones' where IdUnidadV = $this->id";
			$obj_cliente->executeQuery($query); 
			return $obj_cliente->getAffect(); 
	
	}
	function delete()	
	{
			$obj_cliente=new sQuery();
			$query="delete from unidadv where IdUnidadV=$this->id";
			$obj_cliente->executeQuery($query); 
			return $obj_cliente->getAffect(); 
	
	}	
	
}
function cleanString($string)
{
    $string=trim($string);
    $string=mysql_escape_string($string);
	$string=htmlspecialchars($string);
	
    return $string;
}
?>