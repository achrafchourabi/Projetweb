<?PHP

include "../../Services/entities/Climatiseur.php";
$climC=new Climatiseur(1,'shit','fuck','hey','lol','nice');
if (isset($_POST["ID"])){
	$climC->supprimerClima($_POST["ID"]);
	header('Location: ../back_clim.php');
}

?>