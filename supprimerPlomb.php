<?PHP

include "../../Services/entities/plomberie.php";
$plombC=new Plomb(1,'shit','hey','lol','nice');
if (isset($_POST["ID_plomb"])){
	$plombC->supprimerPlomb($_POST["ID_plomb"]);
	header('Location: ../back_plomb.php');
}

?>