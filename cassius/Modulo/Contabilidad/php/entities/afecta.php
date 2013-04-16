<?php

	 // Object represents table 'descripcion'
	class afecta{
		
		 private $id;
		 private $iddocumentos;
		 private $idpuc;
		 private $tipo;
		
		 public function getId(){
			 return $this->idafecta;
		 } 
		 public function setId($id){
			 $this->idafecta = $id;
		 } 
		 public function getIddocumentos(){
			 return $this->iddocumentos;
		 } 
		 public function setIddocumentos($iddocumentos){
			 $this->iddocumentos = $iddocumentos;
		 } 
		 public function getIdpuc(){
			 return $this->idpuc;
		 } 
		 public function setIdpuc($idpuc){
			 $this->idpuc = $idpuc;
		 } 
		 public function getTipo(){
			 return $this->tipo;
		 } 
		 public function setTipo($tipo){
			 $this->tipo = $tipo;
		 }


	}
?>