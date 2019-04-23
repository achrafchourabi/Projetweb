<?PHP
include "C:/wamp64/www/entities/produit.php";
include "C:/wamp64/www/core/produitCore.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['idsouscat']) and isset($_POST['idcat']) and isset($_POST['prix']) and isset($_POST['qte']) and isset($_POST['etat']) and isset($_POST['remise']) and isset($_POST['photo'])){
$produit1=new produit($_POST['id'],$_POST['nom'] ,$_POST['idsouscat'], $_POST['idcat'],$_POST['prix'],$_POST['qte'] , $_POST['etat'] , $_POST['remise'] , $_POST['photo']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$produit1C=new produitC();
$produit1C->ajouterproduit($produit1);
header('Location: index.php');
	
}else{
	
	echo "vérifier les champs";
}
//*/

?>