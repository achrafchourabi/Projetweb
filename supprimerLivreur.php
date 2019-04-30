<?PHP
include "C:/wamp64/www/test/core/livreurC.php";
$livreurC=new LivreurC();
if (isset($_POST["Id"])){
	$livreurC->supprimerLivreur($_POST["Id"]);
	header('Location: afficherLivreur.php');
}

?>