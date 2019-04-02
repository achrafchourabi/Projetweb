<?PHP
include "C:/wamp64/www/entities/souscategorie.php";
include "C:/wamp64/www/core/souscategorieCore.php";

if (isset($_POST['idsouscat']) and isset($_POST['nomsouscat']) and isset($_POST['numcat'])){
$SousCategorie1=new SousCategorie($_POST['idsouscat'],$_POST['nomsouscat'],$_POST['numcat']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$souscategorie1C=new souscategorieC();
$souscategorie1C->ajoutersouscategorie($SousCategorie1);
header('Location: index.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>