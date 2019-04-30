<?PHP
include "C:/wamp64/www/entities/commentaire.php";
include "C:/wamp64/www/core/commentaireCore.php";

if ( isset($_POST['texte']) ){
$commentaire1=new coms(1,$_POST['texte']);
//Partie2
/*
var_dump($commentaire1);
}
*/
//Partie3
$commentaire1C=new comC();
$commentaire1C->ajoutercom($commentaire1);
header('Location: pageevaluation.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>