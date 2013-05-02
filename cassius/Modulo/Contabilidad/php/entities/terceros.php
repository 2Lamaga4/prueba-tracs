<?php
	
	// Object represents table 'descripcion'
	class terceros{
		
		 private $idterceros;
		 private $tipodocumento;
		 private $nodocumento;
		 private $nombretercero;
		 private $direccion;
		 private $telefono;
		 private $email; 
		 private $regimen;
		 private $tipote=0;
					
		 public function getId(){
			 return $this->idterceros;
		 } 
		 public function setId($idterceros){
			 $this->idterceros = $idterceros;
		 } 
		 public function getTipodocumento(){
			 return $this->tipodocumento;
		 } 
		 public function setTipodocumento($tipodocumento){
			 $this->tipodocumento = $tipodocumento;
		 } 
		 public function getNodocumento(){
			 return $this->nodocumento;
		 } 
		 public function setNodocumento($nodocumento){
			 $this->nodocumento = $nodocumento;
		 } 
		 
		 public function getNombretercero(){
			 return $this->nombretercero;
		 } 
		 public function setNombretercero($nombretercero){
			 $this->nombretercero = $nombretercero;
		 } 
		 
		 public function getDireccion(){
			 return $this->direccion;
		 } 
		 public function setDireccion($direccion){
			 $this->direccion = $direccion;
		 } 
		 
		 public function getTelefono(){
			 return $this->telefono;
		 } 
		 public function setTelefono($telefono){
			 $this->telefono = $telefono;
		 } 
		 
		 public function getEmail(){
			 return $this->email;
		 } 
		 public function setEmail($email){
			 $this->email = $email;
		 } 
		 
		 public function getRegimen(){
			 return $this->regimen;
		 } 
		 public function setRegimen($regimen){
			 $this->regimen = $regimen;
		 } 
		
		 public function setTipoter($tipoter1){
		 	    $this->tipoter=$tipoter1;
		 }
		  public function getTipoter(){
		 	 return $this->$tipote;
		 }
	}
?>