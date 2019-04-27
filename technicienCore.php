<?PHP

class technicienCore {
function afficherTechnicien ($technicien){
		echo "Cin: ".$technicien->getCin()."<br>";
		echo "Nom: ".$technicien->getNom()."<br>";
		echo "Prénom: ".$technicien->getPrenom()."<br>";
		echo "date: ".$technicien->getDate()."<br>";
		echo "lieu: ".$technicien->getLieu()."<br>";
				echo "specialite: ".$technicien->getSpecialite()."<br>";
						echo "salaire: ".$technicien->getSalaire()."<br>";
	}

	function ajouterTechnicien($technicien){
		$sql="insert into technicien (cin,nom,prenom,date,lieu,specialite,salaire) values (:cin, :nom,:prenom,:date,:lieu,:specialite,:salaire)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$technicien->getCin();
        $nom=$technicien->getNom();
        $prenom=$technicien->getPrenom();
        $date=$technicien->getDate();
        $lieu=$technicien->getLieu();
         $specialite=$technicien->getSpecialite();
          $salaire=$technicien->getSalaire();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':date',$date);
		$req->bindValue(':lieu',$lieu);
			$req->bindValue(':specialite',$specialite);
				$req->bindValue(':salaire',$salaire);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherTechniciens(){
		$sql="SElECT * From technicien";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerTechnicien($cin){
		$sql="DELETE FROM technicien where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierTechnicien($technicien,$cin){
		$sql="UPDATE technicien SET cin=:cinn, nom=:nom,prenom=:prenom,date=:date,lieu=:lieu,specialite=:specialite,salaire=:salaire WHERE cin=:cin";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		
        $cin=$technicien->getCin();
        $nom=$technicien->getNom();
        $prenom=$technicien->getPrenom();
        $date=$technicien->getDate();
        $lieu=$technicien->getLieu();
         $specialite=$technicien->getSpecialite();
          $salaire=$technicien->getSalaire();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':date'=>$date,':lieu'=>$lieu,':specialite'=>$specialite,':salaire'=>$salaire);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':date',$date);
		$req->bindValue(':lieu',$lieu);
			$req->bindValue(':specialite',$specialite);
				$req->bindValue(':salaire',$salaire);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererTechnicien($cin){
		$sql="SELECT * from technicien where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercher($specialite){
		$sql="SELECT * from technicien where specialite=$specialite";
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

?>