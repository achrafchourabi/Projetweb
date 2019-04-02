<?PHP
include "C:/wamp64/www/entities/categorie.php";
include "C:/wamp64/www/core/categorieCore.php";

if (isset($_POST['idcat']) and isset($_POST['nomcat']) ){
$categorie1=new categorie($_POST['idcat'],$_POST['nomcat']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$categorie1C=new categorieC();
$categorie1C->ajoutercategorie($categorie1);
header('Location: index.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>