<?PHP
include "C:/wamp64/www/core/categorieCore.php";
$categorieC=new categorieC();
if (isset($_POST["idcat"])){
	$categorieC->supprimercategorie($_POST["idcat"]);
	header('Location: affichercategorie.php');
}

?>