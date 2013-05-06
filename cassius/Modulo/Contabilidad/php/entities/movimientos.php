<?php
	 //Object represents table 'descripcion' 
	class movimientos{
		
		 private $id;
		 private $numero;
		 private $fecha;
		 private $tipodoc;
		 private $numdoc;
		 private $concepto;
		 private $estado;
		 private $tercero;
		 private $idmovcuentas;
		 private $codcuenta;
		 private $debito;
		 private $credito;
		 private $idmovimiento;
					
		 public function getId(){

			 return $this->id; 
		 } 
		 public function setId($id){
			 $this->id = $id;
		 } 
		 public function getNumero(){
			 return $this->numero;
		 } 
		 public function setNumero($numero){
			 $this->numero = $numero;
		 } 
		 public function getFecha(){
			 return $this->fecha;
		 } 
		 public function setFecha($fecha){
			 $this->fecha = $fecha;
		 } 
		 
		 public function getTipodoc(){
			 return $this->tipodoc;
		 } 
		 public function setTipodoc($tipodoc){
			 $this->tipodoc = $tipodoc;
		 } 
		 
		 public function getNumdoc(){
			 return $this->numdoc;
		 } 
		 public function setNumdoc($numdoc){
			 $this->numdoc = $numdoc;
		 } 
		 
		 public function getConcepto(){
			 return $this->concepto;
		 } 
		 public function setConcepto($concepto){
			 $this->concepto = $concepto;
		 } 
		 
		 public function getEstado(){
			return $this->estado;
		 } 
		 public function setEstado($estado){
			 $this->estado = $estado;
		 } 
		 
	 	 public function getTercero(){
			 return $this->tercero;
		 } 
		 public function setTercero($tercero){
			 $this->tercero = $tercero;
		 } 
		 
		 public function getIdmovcuentas(){
			 return $this->idmovcuentas;
		 } 
		 public function setIdmovcuentas($idmovcuentas){
			 $this->idmovcuentas = $idmovcuentas;
		 } 
		
		 public function getCodcuenta(){
			 return $this->codcuenta;
		 } 
		 public function setCodcuenta($codcuenta){
			 $this->codcuenta = $codcuenta;
		 } 

		 public function getDebito(){
			 return $this->debito;
		 } 
		 public function setDebito($debito){
			 $this->debito = $debito;
		 }

		 public function getCredito(){
			 return $this->credito;
		 } 
		 public function setCredito($credito){
			 $this->credito = $credito;
		 }

		 public function getIdmovimiento(){
			 return $this->idmovimiento;
		 } 
		 public function setIdmovimiento($idmovimiento){
			 $this->idmovimiento = $idmovimiento;
		 }

	}
?>