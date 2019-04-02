<?php
include ("../config.php");

class Resto{
	private $ID_resto;
	private $demande_resto;
	private $lieu_resto;
	private $secteur_resto;
	private $details_resto;
	private $nom_resto;
	function __construct($ID_resto,$demande_resto,$lieu_resto,$secteur_resto,$details_resto,$nom_resto){
	$this->ID_resto=$ID_resto;
		$this->demande_resto=$demande_resto;
		$this->lieu_resto=$lieu_resto;
		$this->secteur_resto=$secteur_resto;
		$this->details_resto=$details_resto;
		$this->nom_resto=$nom_resto;

	}
	
	function getID_resto(){
		return $this->ID_resto;
	}

	function getDemande_resto(){
		return $this->demande_resto;
	}
	
	function getLieu_resto(){
		return $this->lieu_resto;
	}
	function getSecteur_resto(){
		return $this->secteur_resto;
	}

	function getDetails_resto(){
		return $this->details_resto;
	}
	function getNom_resto(){
		return $this->nom_resto;
	}
	function setLieu_resto($lieu_resto){
	$this->lieu_resto=$lieu_resto;
	}
	function setDemande_resto($demande_resto){
	$this->demande_resto=$demande_resto;
	}
	
	function setSecteur_resto($secteur_resto){
		 $this->secteur_resto=$secteur_resto;
	}

function setDetails_resto($details_resto){
		 $this->details_resto=$details_resto;
	}
	function setNom_resto($nom_resto){
		 $this->nom_resto=$nom_resto;
	}
function setID_resto($ID_resto){
		 $this->ID_resto=$ID_resto;
	}
	

public function ajouterResto($Restaurant){
		$sql="insert into restaurant (demande_resto, lieu_resto, secteur_resto, details_resto,nom_resto) values (:demande_resto,:lieu_resto,:secteur_resto,:details_resto,:nom_resto)";
		
		$db = config::getConnexion();
		try{
        

        $req=$db->prepare($sql);
		
        
		$req->bindValue(':demande_resto',$this->demande_resto);
		$req->bindValue(':secteur_resto',$this->secteur_resto);
		$req->bindValue(':lieu_resto',$this->lieu_resto);
		$req->bindValue(':details_resto',$this->details_resto);
		$req->bindValue(':nom_resto',$this->nom_resto);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
public function afficherResto ($Climatiseur){
			echo "ID_resto: ".$Resto->getID_resto()."<br>";
		echo "nom_resto: ".$Resto->getNom_resto()."<br>";
		echo "demande_resto: ".$Resto->getDemande_resto()."<br>";
		echo "lieu_resto: ".$Resto->getLieu_resto()."<br>";
		echo "details_resto: ".$Resto->getDetails_resto()."<br>";
			echo "secteur_resto: ".$Resto->getSecteur_resto()."<br>";
	}
public function afficherRestaurant(){

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From restaurant";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}












}