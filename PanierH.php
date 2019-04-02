
<?php
include "Climatiseur.php"; 

class Panier{
	
	private $ID_panier;
	private $ID_prod;
private $quantite;
	private $prix;
	
	function __construct($ID_panier,$ID_prod,$quantite,$prix){
		
		$this->ID_panier=$ID_panier;
		$this->ID_prod=$ID_prod;
		$this->quantite=$quantite;
		$this->prix=$prix;
		


	}
	
	function getID_panier()
	{
	return $this->ID_panier;
}

	function getID_prod()
	{
	return $this->ID_prod;
}
	function getQuantite(){
		return $this->quantite;
	}
	
	function getPrix(){
		return $this->prix;
	}
	
	function setID_panier($ID_panier){
	$this->ID_panier=$ID_panier;
	}

	function setID_prod($ID_prod){
	$this->ID_prod=$ID_prod;
	}
function setQuantite($quantite)
{
	$this->quantite=$quantite;
}

function setPrix($prix){
		 $this->prix=$prix;
	}

	public function ajouterPanier($Panier){
		$sql="insert into panier (ID_prod,quantite, prix) values (:ID_prod,:quantite,:prix)";
		
		$db = config::getConnexion();
		try{
        

        $req=$db->prepare($sql);
		
        	$req->bindValue(':ID_prod',$this->ID_prod);

			$req->bindValue(':quantite',$this->quantite);
			$req->bindValue(':prix',$this->prix);
	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

		
	}

	public function afficherPan ($Panier){
			echo "ID_panier: ".$Panier->getID_panier()."<br>";
		echo "ID_prod: ".$Panier->getID_prod()."<br>";
		echo "quantite: ".$Panier->getQuantite()."<br>";
		echo "prix: ".$Panier->getPrix()."<br>";
		
	}
public function afficherPanier(){

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCommande($ID_panier){

		$sql="DELETE FROM panier where ID_panier=:ID_panier ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID_panier',$ID_panier);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
function modifierPanier($Panier,$ID_panier){
		$sql="UPDATE panier SET ID_panier=:ID_panier, ID_prod=:ID_prod,quantite=:quantite,prix=:prix";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
       
        $ID_prod=$Panier->getID_prod();
        $quantite=$Panier->getQuantite();
        $prix=$Panier->getPrix();
       
		$datas = array(':ID_panier'=>$ID_panier, ':ID_panier'=>$ID_panier, ':ID_prod'=>$ID_prod,':quantite'=>$quantite,':prix'=>$prix);
		$req->bindValue(':ID_panier',$ID_panier);
		$req->bindValue(':ID_panier',$ID_panier);
		$req->bindValue(':ID_prod',$ID_prod);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':prix',$prix);
	
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
    }
 function recupererPanier($ID_panier){
		$sql="SELECT * from panier where ID_panier=$ID_panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }


	}

	function countPanier(){
		$sql="Select count(*) from panier ";

                $db = mysqli_connect("localhost","root","","services");
                try
                {
                        $result = mysqli_query($db,$sql) or die ("Exécution de la requête impossible"); 
                    $row = mysqli_fetch_row($result); 
                    $compteur = $row[0];
                    return $compteur;
                    
                }
                

                catch (Exception $e)
                    {die ('Erreur:'.$e->getMessage());
                }
	}


	

	












}