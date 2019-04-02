<?PHP
include "C:/wamp64/www/core/config3.php";


class produitC {
function afficherproduits ($produit){
		echo "id: ".$produit->getid()."<br>";
		echo "Nom: ".$produit->getNom()."<br>";
		echo "souscat: ".$produit->getsouscat()."<br>";
				echo "cat: ".$produit->getcat()."<br>";
				echo "prix: ".$produit->getprix()."<br>";
				echo "qte: ".$produit->getqte()."<br>";
				echo "etat: ".$produit->getetat()."<br>";
				echo "remise: ".$produit->getremise()."<br>";



		
	}
	
	function ajouterproduit($produit){
		$sql=" INSERT into produit (id,nom,idsouscat,idcat,prix,qte,etat,remise) values (:id, :nom , :idsouscat, :idcat , :prix , :qte , :etat , :remise)";
		$db = config3::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$produit->getid();
        $nom=$produit->getNom();
                $idsouscat=$produit->getsouscat();
                $idcat=$produit->getcat();
                $prix=$produit->getprix();
                $qte=$produit->getqte();
                $etat=$produit->getetat();


        
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
				$req->bindValue(':idsouscat',$idsouscat);
								$req->bindValue(':idcat',$idcat);
												$req->bindValue(':prix',$prix);
				$req->bindValue(':qte',$qte);
				$req->bindValue(':etat',$etat);
								$req->bindValue(':remise',$remise);





		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherproduit(){
		$sql="SElECT * From produit";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerproduit($id){
		$sql="DELETE FROM produit where id= :id";
		$db = config3::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduit($produit,$ids){
		$sql="UPDATE produit SET id=:id, nom=:nom , idsouscat=:idsouscat , idcat=:idcat , prix=:prix , qte=:qte , etat=:etat , remise=:remise WHERE ids=:ids";
		
		$db = config3::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$produit->getid();
        $nom=$produit->getNom();
        
		$datas = array( ':idi'=>$idi,':id'=>$id, ':nom'=>$nom , ':idsouscat'=>$idsouscat , ':idcat'=>$idcat ,':prix'=>$prix , ':qte'=>$qte , ':etat'=>$etat , ':remise'=>$remise);
		$req->bindValue(':idi',$idi);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':idsouscat',$idsouscat);
		
		$req->bindValue(':idcat',$idcat);

		$req->bindValue(':prix',$prix);

		$req->bindValue(':qte',$qte);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':remise',$remise);




		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererproduit($id){
		$sql="SELECT * from produit where id=$id";
		$db = config3::getConnexion();
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