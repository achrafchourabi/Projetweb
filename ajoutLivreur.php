<?PHP
include "C:/wamp64/www/test/entities/livreur.php";
include "C:/wamp64/www/test/core/livreurC.php";

if (isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Adresse']) and isset($_POST['Secteur'])){
$livreur1=new livreur(1,$_POST['Nom'],$_POST['Prenom'],$_POST['Adresse'],$_POST['Secteur']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livreur1C=new LivreurC();
$livreur1C->ajouterLivreur($livreur1);
header('Location: afficherLivreur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>