<?PHP
include "C:/wamp64/www/core/produitCore.php";
$produitC=new produitC();
if (isset($_POST["id"])){
	$produitC->supprimerproduit($_POST["id"]);
	header('Location: index.php');
}

?>