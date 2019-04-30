<?PHP
include "C:/wamp64/www/Services/core/PanierCore.php";
$pan=new PanierCore();
if (isset($_POST["ID_panier"])){
	$pan->supprimerCommande($_POST["ID_panier"]);





	header('Location: cart.php');
}

?>