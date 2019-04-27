<?php

class ServAdmin {
	private $ID;
	private $etat;
	private $nomTech;
	private $note;
	
	function __construct($ID,$etat,$nomTech,$note){
		//$this->climInst=$climInst;
		//$this->climPanne=$climPanne;
		$this->ID=$ID;
			$this->etat=$etat;
				$this->nomTech=$nomTech;
				$this->note=$note;
	}
	
function getID(){
		return $this->ID;
	}
function getEtat()
	{
		return $this->etat;
	}
	function getnomTech()
	{
		return $this->nomTech;
	}
	function getNote()
	{
		return $this->note;
	}
	function setID($ID){
	$this->ID=$ID;
	}

function setEtat($etat){
		 $this->etat=$etat;
	}
	function setNomTech($nomTech){
		 $this->nomTech=$nomTech;
	}
	function setNote($note){
		 $this->note=$note;
	}

}

?>