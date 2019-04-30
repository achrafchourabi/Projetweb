<?PHP
          include "C:/wamp64/www/core/config.php";



class comC {

function affichercoms($coms){
		echo "idcom: ".$coms->getidcom()."<br>";
		echo "texte: ".$coms->gettexte()."<br>";
		
	}
	
	function ajoutercom($coms){
		$sql="insert into commentaire (idcom,texte) values (:idcom, :texte)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idcom=$coms->getidcom();
        $texte=$coms->gettexte();
        
		$req->bindValue(':idcom',$idcom);
		$req->bindValue(':texte',$texte);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercom(){
		$sql="SElECT * From commentaire";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
	function recuperercom($idcom){
		$sql="SELECT * from commentaire where idcom=$idcom";
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