<?php
include("../config.php");  

class Plomb{
	private $ID_plomb;
	private $lieu_plomb;
private $demande_plomb;
	private $details_plomb;
	private $nom_plomb;
	function __construct($ID_plomb,$lieu_plomb,$details_plomb,$nom_plomb,$demande_plomb){
		$this->ID_plomb=$ID_plomb;
		$this->lieu_plomb=$lieu_plomb;
	$this->demande_plomb=$demande_plomb;
		$this->details_plomb=$details_plomb;
		$this->nom_plomb=$nom_plomb;

	}
	function getID_plomb(){
		return $this->ID_plomb;
	}

	function getDemande_plomb()
	{
	return $this->demande_plomb;
}
	function getLieu_plomb(){
		return $this->lieu_plomb;
	}
	
	function getDetails_plomb(){
		return $this->details_plomb;
	}
	function getNom_plomb(){
		return $this->nom_plomb;
	}
	function setID($ID_plomb){
	$this->ID_plomb=$ID_plomb;
	}
	function setLieu_plomb($lieu_plomb){
	$this->lieu=$lieu_plomb;
	}
function setDemande_plomb($demande_plomb)
{
	$this->demande_plomb=$demande_plomb;
}

function setDetails_plomb($details_plomb){
		 $this->details_plomb=$details_plomb;
	}
	function setNom_plomb($nom_plomb){
		 $this->nom_plomb=$nom_plomb;
	}

	

public function ajouterPlomb($Plomb){
		$sql="insert into plomberie (lieu_plomb,details_plomb,nom_plomb,demande_plomb) values (:lieu_plomb,:details_plomb,:nom_plomb,:demande_plomb)";
		
		$db = config::getConnexion();
		try{
        

        $req=$db->prepare($sql);
		
		$req->bindValue(':lieu_plomb',$this->lieu_plomb);
		$req->bindValue(':details_plomb',$this->details_plomb);
		$req->bindValue(':nom_plomb',$this->nom_plomb);
		$req->bindValue(':demande_plomb',$this->demande_plomb);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
		public function afficherPlombe ($Plomb){
			echo "ID_plomb: ".$Plomb->getID_plomb()."<br>";
		echo "nom_plomb: ".$Plomb->getNom_plomb()."<br>";
		echo "demande_plomb: ".$Plomb->getDemande_plomb()."<br>";
		echo "lieu_plomb: ".$Plomb->getLieu_plomb()."<br>";
		echo "details_plomb: ".$Plomb->getDetails_plomb()."<br>";
			
	}
public function afficherPlomb(){

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From plomberie";
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