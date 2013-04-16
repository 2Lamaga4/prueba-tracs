<?php

	 // Object represents table 'descripcion'
	class documentos{
		
		 private $id;
		 private $sigla;
		 private $nombredoc;
		 private $descripcion;
		 private $ctasafecta;

		
		 public function getId(){
			 return $this->iddocumentos;
		 } 
		 public function setId($id){
			 $this->iddocumentos = $id;
		 } 
		 public function getSigla(){
			 return $this->sigla;
		 } 
		 public function setSigla($sigla){
			 $this->sigla = $sigla;
		 } 
		 public function getNombredoc(){
			 return $this->nombredoc;
		 } 
		 public function setNombredoc($nombredoc){
			 $this->nombredoc = $nombredoc;
		 } 
		 
		 public function getDescripcion(){
			 return $this->descripcion;
		 } 
		 public function setDescripcion($descripcion){
			 $this->descripcion = $descripcion;
		 } 
		 
		 public function getCtasafecta(){
			 return $this->ctasafecta;
		 } 
		 public function setCtasafecta($ctasafecta){
			 $this->ctasafecta = $ctasafecta;
		 } 
	

	}
?>