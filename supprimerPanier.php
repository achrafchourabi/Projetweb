<?PHP
include "../core/PanierCore.php";
include '../../config.php';
$pan=new PanierCore();
if (isset($_POST["ID_panier"])){
	$pan->supprimerCommande($_POST["ID_panier"]);





	header('Location: cart.php');
}

?>