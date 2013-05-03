<?php
   class cedula{
   	    public $idtipoc;
   	    public $nombresigla;

   	    public function setIdTipo($idtipoc)
   	    {
          $this->idtipoc=$idtipoc;
        }

   	    public function getIdTipo(){
   	    		return $this->idtipoc;
   	    }


          public function setSigla($nombresigla)
          {
            $this->nombresigla=$nombresigla;
          }
          
   	    public function getSigla(){
   	    		return $this->nombresigla;
   	    }
   }

 ?>


