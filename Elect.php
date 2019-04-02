<?php

  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=services', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }


class Elect{
	private $ID_elect;
	private $lieu_elect;
private $demande_elect;
	private $details_elect;
	private $nom_elect;
	function __construct($ID_elect,$lieu_elect,$details_elect,$nom_elect,$demande_elect){
	
		$this->ID_elect=$ID_elect;
		$this->lieu_elect=$lieu_elect;
	$this->demande_elect=$demande_elect;
		$this->details_elect=$details_elect;
		$this->nom_elect=$nom_elect;

	}
		
		function getID_elect()
	{
	return $this->ID_elect;
}

	function getDemande_elect()
	{
	return $this->demande_elect;
}
	function getLieu_elect(){
		return $this->lieu_elect;
	}
	
	function getDetails_elect(){
		return $this->details_elect;
	}
	function getNom_elect(){
		return $this->nom_elect;
	}
	function setLieu_elect($lieu_elect){
	$this->lieu=$lieu_elect;
	}
function setDemande_elect($demande_elect)
{
	$this->demande_elect=$demande_elect;
}

function setDetails_elect($details_elect){
		 $this->details_elect=$details_elect;
	}
	function setNom_elect($nom_elect){
		 $this->nom_elect=$nom_elect;
	}
function setID_elect($ID_elec){
		 $this->ID_elec=$ID_elec;
	}
	

public function ajouterElect($Elect){
		$sql="insert into electricity (lieu_elect,details_elect,nom_elect,demande_elect) values (:lieu_elect,:details_elect,:nom_elect,:demande_elect)";
		
		$db = config::getConnexion();
		try{
        

        $req=$db->prepare($sql);
		
		$req->bindValue(':lieu_elect',$this->lieu_elect);
		$req->bindValue(':details_elect',$this->details_elect);
		$req->bindValue(':nom_elect',$this->nom_elect);
		$req->bindValue(':demande_elect',$this->demande_elect);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	public function afficherElect ($Elect){
			echo "ID_elect: ".$Elect->getID()."<br>";
		echo "nom_elect: ".$Elect->getNom()."<br>";
		echo "demande_elect: ".$Elect->getDemande()."<br>";
		echo "lieu_elect: ".$Elect->getLieu()."<br>";
		echo "details_elect: ".$Elect->getDetails()."<br>";
			
	}
public function afficherElectricity(){

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From electricity";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	

function supprimerElect($ID_elect){

		$sql="DELETE FROM electricity where ID_elect=:ID_elect ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID_elect',$ID_elect);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}










}