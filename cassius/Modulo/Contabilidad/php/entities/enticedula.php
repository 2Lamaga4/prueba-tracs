<?php
   class cedula(){
   	    public $idcargo;
   	    public $nombrecargo;
   	    public function setIdCargo($cargos)
   	    {$this->idcargo=$cargos;}
   	    public function setNombreCargo($nombrecar){$this->nombrecargo=$nombrecar;
   	    }
   	    public function getIdCargo(){
   	    		return $this->idcargo;
   	    }
   	    public function getNombreCargo(){
   	    		return $this->nombrecargo;
   	    }
   }
 ?>