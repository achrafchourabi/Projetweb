<?PHP
include "../entities/PanierH.php";


$pan=new Panier($_POST["ID_panier"],2,5,1.2);

echo  $pan->getID_panier();
if (isset($_POST["ID_panier"])){
	
	$pan->supprimerCommande($_POST["ID_panier"]);





	header('Location: ../clim.php');
}

?>