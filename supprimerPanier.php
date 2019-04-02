<?PHP
include "../../Services/entities/PanierH.php";
include '../../Services/config.php';
$pan=new Panier(1,2,5,1.2);
if (isset($_POST["ID_panier"])){
	$pan->supprimerCommande($_POST["ID_panier"]);





	header('Location: ../Panier_back.php');
}

?>