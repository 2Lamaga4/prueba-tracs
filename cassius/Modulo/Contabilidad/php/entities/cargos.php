<?php

class cargoEnti{

	public $cargo;
	public $des;

	function setCargo($cargo){
		$this->cargo=$cargo;
	}
	function getCargo(){
		return $this->cargo;
	}

	function setDes($des){
		$this->des=$des;
	}
	function getDes(){
		return $this->des;
	}
}

?>