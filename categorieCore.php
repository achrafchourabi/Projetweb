<?PHP
          include "C:/wamp64/www/core/config.php";



class categorieC {

function affichercategories($categorie){
		echo "idcat: ".$categorie->getidcat()."<br>";
		echo "Nom: ".$categorie->getNomcat()."<br>";
		
	}
	
	function ajoutercategorie($categorie){
		$sql="insert into categorie (idcat,nomcat) values (:idcat, :nomcat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idcat=$categorie->getidcat();
        $nomcat=$categorie->getNomcat();
        
		$req->bindValue(':idcat',$idcat);
		$req->bindValue(':nomcat',$nomcat);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercategorie(){
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercategorie($idcat){
		$sql="DELETE FROM categorie where idcat= :idcat";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idcat',$idcat);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercategorie($categorie,$idcat){
		$sql="UPDATE categorie SET idcat=:idcat, nomcat=:nomcat WHERE idcat=:idcat";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idcat=$categorie->getidcat();
        $nomcat=$categorie->getNomcat();
        
		$datas = array(':idcat'=>$idcat, ':idcat'=>$idcat, ':nomcat'=>$nomcat);
		$req->bindValue(':idcat',$idcat);
		$req->bindValue(':idcat',$idcat);
		$req->bindValue(':nomcat',$nomcat);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercategorie($idcat){
		$sql="SELECT * from categorie where idcat=$idcat";
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