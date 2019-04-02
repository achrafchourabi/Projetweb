<?php
include ("../config.php");

class Peint{
	private $ID_peint;
	private $lieu_peint;
	private $demande_peint;
	private $details_peint;
	private $nom_peint;
	function __construct($ID_peint,$lieu_peint,$details_peint,$nom_peint,$demande_peint){
			$this->$ID_peint=$ID_peint;
		$this->lieu_peint=$lieu_peint;
	$this->demande_peint=$demande_peint;
		$this->details_peint=$details_peint;
		$this->nom_peint=$nom_peint;

	}
	
	function getID_peint()
	{
	return $this->ID_peint;;
}
	function getDemande_peint()
	{
	return $this->demande_peint;
}
	function getLieu_peint(){
		return $this->lieu_peint;
	}
	
	function getDetails_peint(){
		return $this->details_peint;
	}
	function getNom_peint(){
		return $this->nom_peint;
	}
	function setID_peint($ID_peint){
	$this->ID_peint=$ID_peint;
	}
	function setLieu_peint($lieu_peint){
	$this->lieu=$lieu_peint;
	}
function setDemande_peint($demande_peint)
{
	$this->demande_peint=$demande_peint;
}

function setDetails_peint($details_peint){
		 $this->details_peint=$details_peint;
	}
	function setNom_peint($nom_peint){
		 $this->nom_peint=$nom_peint;
	}

	

public function ajouterPeint($Peint){
		$sql="insert into peinture (lieu_peint,details_peint,nom_peint,demande_peint) values (:lieu_peint,:details_peint,:nom_peint,:demande_peint)";
		
		$db = config::getConnexion();
		try{
		

		$req=$db->prepare($sql);
		
		$req->bindValue(':lieu_peint',$this->lieu_peint);
		$req->bindValue(':details_peint',$this->details_peint);
		$req->bindValue(':nom_peint',$this->nom_peint);
		$req->bindValue(':demande_peint',$this->demande_peint);
			$req->execute();
		   
		}
		catch (Exception $e){
			echo 'Erreur: '.$e->getMessage();
		}
		
	}
		public function afficherPeint($Peint){
			echo "ID_peint: ".$Peint->getID_peint()."<br>";
		echo "nom_peint: ".$Peint->getNom_peint()."<br>";
		echo "demande_peint: ".$Peint->getDemande_peint()."<br>";
		echo "lieu_peint: ".$Peint->getLieu_peint()."<br>";
		echo "details_peint: ".$Peintr->getDetails_peint()."<br>";
			
	}
public function afficherPeinture(){

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From peinture";
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