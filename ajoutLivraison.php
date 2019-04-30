<?PHP
include "C:/wamp64/www/test/entities/livraison.php";
include "C:/wamp64/www/test/core/livraisonC.php";

if (isset($_POST['Date']) and isset($_POST['Secteur']) and isset($_POST['Idclient']) and isset($_POST['Idlivreur']) ){
$livraison1=new livraison(1,$_POST['Date'],$_POST['Secteur'],$_POST['Idclient'],$_POST['Idlivreur']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);
header('Location: afficherLivraison.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>