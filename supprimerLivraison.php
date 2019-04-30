<?PHP
include "C:/wamp64/www/test/core/livraisonC.php";
$livraisonC=new LivraisonC();
if (isset($_POST["Id"])){
	$livraisonC->supprimerLivraison($_POST["Id"]);
	header('Location: afficherLivraison.php');
}

?>