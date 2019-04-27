<?php


class servAdminCore{
public function ajouterServicaa($ServAdmin){
		$sql="insert into servadmin (ID,nomTech,etat) values (:ID,:nomTech,:etat)";
		
		$db = config::getConnexion();
		try{
        

        $req=$db->prepare($sql);
		
       
		$ID=$ServAdmin->getID();
		$nomTech=$ServAdmin->getnomTech();
		$etat=$ServAdmin->getEtat();
		
		$req->bindValue(':ID',$ID);
		$req->bindValue(':nomTech',$nomTech);
		$req->bindValue(':etat',$etat);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

		
	}

function ajouterEvaluation($ServAdmin){
		$sql="insert into servadmin (ID,nomTech,etat,note) values (:ID,:nomTech,:etat,:note)";
		$db = config::getConnexion();
		try{
        

        $req=$db->prepare($sql);
		
       
		$ID=$ServAdmin->getID();
		$nomTech=$ServAdmin->getnomTech();
		$etat=$ServAdmin->getEtat();
		$note=$ServAdmin->getNote();
		$req->bindValue(':ID',$ID);
		$req->bindValue(':nomTech',$nomTech);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':note',$note);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

		
	}
		
	function affecter(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT Distinct e.ID,e.nomTech ,e.etat,a.type  From servadmin e inner join service a on e.ID= a.ID  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function afficherSuivie(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT Distinct e.ID,e.nomTech ,e.etat,a.type  From servadmin e inner join service a on e.ID= a.ID  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function modifierSuivie(){
		$sql="UPDATE servadmin SET note=:note WHERE ID=:ID";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		 $ID=$servadmin->getID();
		  $nomTech=$servadmin->getnomTech();
		   $etat=$servadmin->getEtat();
          $note=$servadmin->getNote();
         
		$datas = array(':ID'=>$ID, ':nomTech'=>$nomTech,':etat'=>$etat,':note'=>$note);
		$req->bindValue(':ID',$ID);
	
		$req->bindValue(':nomTech',$nomTech);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':note',$note);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
	}
	function moyenne(){
		$sql="SELECT avg(note), ID,nomTech,etat FROM servadmin group by ID ;";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
 function recupererServ($ID){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
 
		$sql="SElECT Distinct e.ID,e.nomTech ,e.etat,a.type  From servadmin e inner join service a on e.ID= a.ID where e.ID='$ID'  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	}
    }
	/*public function afficherService ($ServAdmin){
			echo "ID: ".$Services->getID()."<br>";
		echo "nom: ".$Services->getNom()."<br>";
		echo "demande: ".$Services->getDemande()."<br>";
		echo "lieu: ".$Services->getLieu()."<br>";
		echo "details: ".$Services->getDetails()."<br>";
			echo "type: ".$Services->getType()."<br>";
			echo "secteur: ".$Services->getSecteur()."<br>";
	}

public function afficherClim(){

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT ID,nom,demande,lieu,secteur,details From service where type='climatisation' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	public function afficherElectricity(){

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT ID,nom,demande,lieu,details From service where type='electricity' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	public function afficherPlomb(){

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT ID,nom,demande,lieu,details  From service where type='plomberie' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	public function afficherPeinture(){

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT ID,nom,demande,lieu,details From service where type='peinture' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		public function afficherRestaurant(){

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT ID,nom,demande,lieu,secteur,details From service where type='restauration' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerService($ID){

		$sql="DELETE FROM service where ID=:ID ";
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
	
function rechercher($ServAdmin){
		$sql="SELECT * from service where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifierServ($ServAdmin,$ID){
		$sql="UPDATE service SET ID=:ID, demande=:demande,lieu=:lieu,details=:details,secteur:=secteur, nom=:nom,type=:type WHERE ID=:ID";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		 $secteur=$Services->getSecteur();
         $type=$Services->getType();
        $demande=$Services->getDemande();
        $type=$Services->getType();
        $lieu=$Services->getLieu();
        $details=$Services->getDetails();
          $nom=$Services->getNom();
         
		$datas = array(':ID'=>$ID, ':ID'=>$ID, ':demande'=>$demande,':secteur'=>$secteur,':lieu'=>$lieu,':details'=>$details, ':nom'=>$nom, ':type'=>$type);
		$req->bindValue(':ID',$ID);
		$req->bindValue(':ID',$ID);
		$req->bindValue(':demande',$demande);
		$req->bindValue(':type',$type);
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':details',$details);
		$req->bindValue(':nom',$nom);
		
				$req->bindValue(':secteur',$secteur);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
    }
   


}*/