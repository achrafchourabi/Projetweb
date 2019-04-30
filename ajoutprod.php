<?PHP
include "C:/wamp64/www/entities/produit.php";
include "C:/wamp64/www/core/produitCore.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($POST['idsouscat']) and isset($POST['idcat']) and isset($POST['prix']) and isset($POST['qte']) and isset($POST['etat']) and isset($POST['remise']) and isset($POST['photo'])){
$produit1=new produit($_POST['id'],$_POST['nom'] ,$_POST['idsouscat'], $_POST['idcat'],$_POST['prix'],$_POST['qte'] , $_POST['etat'] , $_POST['remise'] , $_POST['photo']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$produit1C=new produitC();
$produit1C->ajouterproduit($produit1);
header('Location: afficherproduit.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>