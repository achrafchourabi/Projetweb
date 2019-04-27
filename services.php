<?php

class Services {
	private $ID;
	private $demande;
	private $lieu;
	private $details;
	private $secteur;
	private $nom;
	private $type;
	private $fileToUpload;
	function __construct($ID,$demande,$lieu,$secteur,$details,$nom,$type,$fileToUpload){
		//$this->climInst=$climInst;
		//$this->climPanne=$climPanne;
		$this->ID=$ID;
		$this->demande=$demande;
		$this->lieu=$lieu;
		$this->secteur=$secteur;
		$this->details=$details;
		$this->nom=$nom;
		$this->type=$type;
		$this->fileToUpload=$fileToUpload;
			
	}
	
function getID(){
		return $this->ID;
	}
	function getsource(){
		return $this->fileToUpload;
	}
	function getType(){
		return $this->type;
	}
	function getDemande(){
		return $this->demande;
	}
	
	function getLieu(){
		return $this->lieu;
	}

	function getDetails(){
		return $this->details;
	}
	function getNom(){
		return $this->nom;
	}
		function getSecteur()
	{
		return $this->secteur;
	}

	function setSecteur($secteur)
	{
		 $this->secteur=$secteur;
	}
	function setID($ID){
	$this->ID=$ID;
	}
	function setDemande($demande){
	$this->demande=$demande;
	}

function setDetails($details){
		 $this->details=$details;
	}
	function setNom($nom){
		 $this->nom=$nom;
	}
		function setType($type){
		 $this->type=$type;
	}


}

?>