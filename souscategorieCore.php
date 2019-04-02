<?PHP
          include "C:/wamp64/www/core/config2.php";




class souscategorieC {
function affichersouscategories ($SousCategorie){
		echo "idsouscat: ".$SousCategorie->getidsouscat()."<br>";
		echo "Nomsouscat: ".$SousCategorie->getnomsouscat()."<br>";
				echo "numcat: ".$SousCategorie->getcat()."<br>";

		
	}
	
	function ajoutersouscategorie($SousCategorie){
		$sql=" INSERT into souscategorie (idsouscat,nomsouscat,numcat) values (:idsouscat, :nomsouscat , :numcat)";
		$db = config2::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idsouscat=$SousCategorie->getidsouscat();
        $nomsouscat=$SousCategorie->getnomsouscat();
                $numcat=$SousCategorie->getcat();

        
		$req->bindValue(':idsouscat',$idsouscat);
		$req->bindValue(':nomsouscat',$nomsouscat);
				$req->bindValue(':numcat',$numcat);

		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichersouscategorie(){
		$sql="SELECT * From souscategorie";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimersouscategorie($idsouscat){
		$sql="DELETE FROM souscategorie where idsouscat= :idsouscat";
		$db = config2::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idsouscat',$idsouscat);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiersouscategorie($souscategorie,$idsouscat){
		$sql="UPDATE souscategorie SET idsouscat=:idsouscat, nomsouscat=:nomsouscat , numcat=:numcat WHERE idsouscat=:idsouscat";
		
		$db = config2::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idsouscat=$SousCategorie->getidsouscat();
        $nomsouscat=$SousCategorie->getnomsouscat();
        $numcat=$SousCategorie->getcat();

        
		$datas = array(':idsouscat'=>$idsouscat, ':idsouscat'=>$idsouscat, ':nomsouscat'=>$nomsouscat , ':numcat'=>$numcat);
		$req->bindValue(':idsouscat',$idsouscat);
		$req->bindValue(':idsouscat',$idsouscat);
		$req->bindValue(':nomsouscat',$nomsouscat);
				$req->bindValue(':numcat',$numcat);

		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperersouscategorie($idsouscat){
		$sql="SELECT * from souscategorie where idsouscat=$idsouscat";
		$db = config2::getConnexion();
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