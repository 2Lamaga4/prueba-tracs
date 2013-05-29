<?php
	 // Object represents table 'descripcion'

	class cuentas{
		
		 private $id;
		 private $cuenta;
		 private $denominacion;
		 private $descripcion;
		 private $estado;
		private $nivel;
		
		 public function getId(){
			 return $this->idpuc;
		 } 
		 public function setId($id){
			 $this->idpuc = $id;
		 } 
		 public function getCuenta(){
			 return $this->cuenta;
		 } 
		 public function setCuenta($cuenta){
			 $this->cuenta = $cuenta;
		 } 
		 public function getDenominacion(){ 
			 return $this->denominacion;
		 } 
		 public function setDenominacion($denominacion){ 
			 $this->denominacion = $denominacion;
		 } 
		 public function getDescripcion(){
			 return $this->descripcion;
		 } 
		 public function setDescripcion($descripcion){
			 $this->descripcion = $descripcion;
		 } 
		 public function getEstado(){
			 return $this->estado;
		 } 
		 public function setEstado($estado){
			 $this->estado = $estado;
		 } 
		 
		 public function getNivel(){
			 return $this->nivel;
		 } 
		 public function setNivel($nivel){
			 $this->nivel = $nivel;
		 }

	}
?>