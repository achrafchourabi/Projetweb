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
								echo "photo: ".$produit->getphoto()."<br>";




		
	}
	 function totalproduit ()
	{
		$pdo = config3::getConnexion();
		$SQL=$pdo->query("SELECT count(*) as total FROM `produit` ") ;
		$data = $SQL->fetch();
/*$sommeanswered = $data['total'];*/

/*var_dump($data);*/
echo "Total Produits : ".$data['total'];
		  

			}

			function totalproduitsalledebain ()
			{
			$pdo = config3::getConnexion();
		$SQL=$pdo->query("SELECT count(*) as total FROM `produit` where idcat=1 ") ;
		$data = $SQL->fetch();
/*$sommeanswered = $data['total'];*/

/*var_dump($data);*/
echo "Total Produits : ".$data['total'];	
			}
			function totalproduitmaisonetjardin ()
			{
			$pdo = config3::getConnexion();
		$SQL=$pdo->query("SELECT count(*) as total FROM `produit` where idcat=2 ") ;
		$data = $SQL->fetch();
/*$sommeanswered = $data['total'];*/

/*var_dump($data);*/
echo "Total Produits : ".$data['total'];	
			}
			function totalproduitcuisine ()
			{
			$pdo = config3::getConnexion();
		$SQL=$pdo->query("SELECT count(*) as total FROM `produit` where idcat=3 ") ;
		$data = $SQL->fetch();
/*$sommeanswered = $data['total'];*/

/*var_dump($data);*/
echo "Total Produits : ".$data['total'];	
			}
	function ajouterproduit($produit){
		$sql=" INSERT into produit (id,nom,idsouscat,idcat,prix,qte,etat,remise,photo) values (:id, :nom , :idsouscat, :idcat , :prix , :qte , :etat , :remise , :photo)";
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
                $remise=$produit->getremise();
                $photo=$produit->getphoto() ;


        
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
				$req->bindValue(':idsouscat',$idsouscat);
								$req->bindValue(':idcat',$idcat);
												$req->bindValue(':prix',$prix);
				$req->bindValue(':qte',$qte);
				$req->bindValue(':etat',$etat);
								$req->bindValue(':remise',$remise);
																$req->bindValue(':photo',$photo);






		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherproduit(){
		$sql="SELECT * From produit";
		

		$db = config3::getConnexion();

		try{
		$liste=$db->query($sql);
		return $liste ;
		  

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
}
function afficherproduitsalledebain ()
{
$sql="SELECT * From produit where idcat=1";
		

		$db = config3::getConnexion();

		try{
		$liste=$db->query($sql);
		return $liste ;
		  

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
}
function rechercher ()
{
	$db = config3::getConnexion();
	if ( isset($_GET['rechercher']) AND !empty($_GET['rechercher'])) {
                	
                $rechercher = htmlspecialchars($_GET['rechercher'])	;
$sql="SELECT * From produit where nom like '%$rechercher%'  ";
		

		

		try{
		$liste=$db->query($sql);
		return $liste ;
		  

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
        else 
{
	echo "pas de recherche" ;
}
}
function afficherproduitmaisonetjardin ()
{
$sql="SELECT * From produit where idcat=2";
		

		$db = config3::getConnexion();

		try{
		$liste=$db->query($sql);
		return $liste ;
		  

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
}
	function afficherproduitcuisine ()
{
$sql="SELECT * From produit where idcat=3";
		

		$db = config3::getConnexion();

		try{
		$liste=$db->query($sql);
		return $liste ;
		  

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
	function modifierproduit($produit,$id){
		$sql="UPDATE produit SET id=:id, nom=:nom , idsouscat=:idsouscat , idcat=:idcat , prix=:prix , qte=:qte , etat=:etat , remise=:remise , photo=:photo WHERE id=:id";
		
		$db = config3::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$produit->getid();
        $nom=$produit->getNom();
                $idsouscat=$produit->getsouscat();
        $idcat=$produit->getcat();
        $prix=$produit->getprix();
        $qte=$produit->getqte();
        $etat=$produit->getetat();
        $remise=$produit->getremise();
        $photo=$produit->getphoto() ;

        
		$datas = array( ':id'=>$id,':id'=>$id, ':nom'=>$nom , ':idsouscat'=>$idsouscat , ':idcat'=>$idcat ,':prix'=>$prix , ':qte'=>$qte , ':etat'=>$etat , ':remise'=>$remise , ':photo'=>$photo);
		$req->bindValue(':id',$id);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':idsouscat',$idsouscat);
		
		$req->bindValue(':idcat',$idcat);

		$req->bindValue(':prix',$prix);

		$req->bindValue(':qte',$qte);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':remise',$remise);
				$req->bindValue(':photo',$photo);





		
		
		
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