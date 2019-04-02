<?PHP
include "C:/wamp64/www/core/souscategorieCore.php";
$souscategorieC=new souscategorieC();
if (isset($_POST["idsouscat"])){
	$souscategorieC->supprimersouscategorie($_POST["idsouscat"]);
	header('Location: index.php');
}

?>