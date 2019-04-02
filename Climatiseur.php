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

class Climatiseur{
	private $ID;
	private $demande;
	private $lieu;
	private $secteur;
	private $details;
	private $nom;
	function __construct($ID,$demande,$lieu,$secteur,$details,$nom){
		//$this->climInst=$climInst;
		//$this->climPanne=$climPanne;
		$this->ID=$ID;
		$this->demande=$demande;
		$this->lieu=$lieu;
		$this->secteur=$secteur;
		$this->details=$details;
		$this->nom=$nom;

	}
	
function getID(){
		return $this->ID;
	}
	function getDemande(){
		return $this->demande;
	}
	
	function getLieu(){
		return $this->lieu;
	}
	function getSecteur(){
		return $this->secteur;
	}

	function getDetails(){
		return $this->details;
	}
	function getNom(){
		return $this->nom;
	}
	function setID($ID){
	$this->ID=$ID;
	}
	function setDemande($demande){
	$this->demande=$demande;
	}
	
	function setSecteur($secteur){
		 $this->secteur=$secteur;
	}

function setDetails($details){
		 $this->details=$details;
	}
	function setNom($nom){
		 $this->nom=$nom;
	}


public function ajouterClim($Climatiseur){
		$sql="insert into climatisation (demande, lieu, secteur, details,nom) values (:demande,:lieu,:secteur,:details,:nom)";
		
		$db = config::getConnexion();
		try{
        

        $req=$db->prepare($sql);
		
        
		$req->bindValue(':demande',$this->demande);
		$req->bindValue(':secteur',$this->secteur);
		$req->bindValue(':lieu',$this->lieu);
		$req->bindValue(':details',$this->details);
		$req->bindValue(':nom',$this->nom);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

		
	}
	public function afficherClima ($Climatiseur){
			echo "ID: ".$Climatiseur->getID()."<br>";
		echo "nom: ".$Climatiseur->getNom()."<br>";
		echo "demande: ".$Climatiseur->getDemande()."<br>";
		echo "lieu: ".$Climatiseur->getLieu()."<br>";
		echo "details: ".$Climatiseur->getDetails()."<br>";
			echo "secteur: ".$Climatiseur->getSecteur()."<br>";
	}
public function afficherClim(){

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From climatisation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerClima($ID){

		$sql="DELETE FROM climatisation where ID=:ID ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID',$ID);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
function rechercher($Climatiseur){
		$sql="SELECT * from climatisation where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifierClim($Climatiseur,$ID){
		$sql="UPDATE climatisation SET ID=:ID, demande=:demande,secteur=:secteur,lieu=:lieu,details=:details, nom=:nom WHERE ID=:ID";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
       
        $demande=$Climatiseur->getDemande();
        $secteur=$Climatiseur->getSecteur();
        $lieu=$Climatiseur->getLieu();
        $details=$Climatiseur->getDetails();
          $nom=$Climatiseur->getNom();
		$datas = array(':ID'=>$ID, ':ID'=>$ID, ':demande'=>$demande,':secteur'=>$secteur,':lieu'=>$lieu,':details'=>$details, ':nom'=>$nom);
		$req->bindValue(':ID',$ID);
		$req->bindValue(':ID',$ID);
		$req->bindValue(':demande',$demande);
		$req->bindValue(':secteur',$secteur);
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':details',$details);
		$req->bindValue(':nom',$nom);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
    }
 function recupererClim($ID){
		$sql="SELECT * from climatisation where ID=$ID";
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