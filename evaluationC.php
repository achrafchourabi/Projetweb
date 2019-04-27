<?PHP 

class evaluationC{

	function ajouterEvaluation($Evaluation){
		$sql="insert into evaluation (ID,type,note) values (:ID,:type,:note)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$ID=$Evaluation->getID();
        $note=$Evaluation->getNote();
        $type=$Evaluation->getType();
        $req->bindValue(':ID',$ID);
		$req->bindValue(':note',$note);
		$req->bindValue(':type',$type);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherEvaluations(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From evaluation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEvaluation($id){
		$sql="DELETE FROM evaluation where id= :Id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
	function moyenne(){
		$sql="SELECT avg(Note), Idlivreur FROM evaluation group by Idlivreur ;";
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