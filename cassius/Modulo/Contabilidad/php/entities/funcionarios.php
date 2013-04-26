<?php

	 //Object represents table 'descripcion'
	class funcionarios{
		
		 private $idfuncionarios;
		 private $tipodocumento;
		 private $nodocumento;
		 private $nombres;
		 private $apellidos;
		 private $rutnit;
		 private $telefono;
		 private $celular;
		 private $direccion;
		 private $cargo;
		 private $IdFunCargo;
		 private $CargoFun;										
			
		
		 public function getId(){
			 return $this->idfuncionarios;
		 } 
		 public function setId($idfuncionarios){
			 $this->idfuncionarios = $idfuncionarios;
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
		 public function getNombres(){
			 return $this->nombres;
		 } 
		 public function setNombres($nombres){
			 $this->nombres = $nombres;
		 } 
		 public function getApellidos(){
			 return $this->apellidos;
		 } 
		 public function setApellidos($apellidos){
			 $this->apellidos = $apellidos;
		 } 
		 public function getRutnit(){
			 return $this->rutnit;
		 } 
		 public function setRutnit($rutnit){
			 $this->rutnit = $rutnit;
		 } 
		 public function getTelefono(){
			 return $this->telefono;
		 } 
		 public function setTelefono($telefono){
			 $this->telefono = $telefono;
		 } 
		 public function getCelular(){
			 return $this->celular;
		 } 
		 public function setCelular($celular){
			 $this->celular = $celular;
		 } 
		 public function getDireccion(){
			 return $this->direccion;
		 } 
		 public function setDireccion($direccion){
			 $this->direccion = $direccion;
		 } 
		 public function getCargo(){
			 return $this->cargo;
		 } 
		 public function setCargo($cargo){
			 $this->cargo = $cargo;
		 } 
		public function getIdFunCargo(){
			 return $this->IdFunCargo;
		 } 
		 public function setIdFunCargo($IdFunCargoios){
			 $this->IdFunCargo = $IdFunCargo;
		 } 
		    public function getCargoFun(){
			 return $this->CargoFun;
		 } 
		 public function setCargoFun($CargoFun){
			 $this->CargoFun = $CargoFun;
		 } 

	}
?>