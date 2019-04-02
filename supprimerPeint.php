<?PHP

include "../../Services/entities/peinture.php";
$peintC=new Peint(1,'shit','hey','lol','nice');
if (isset($_POST["ID_peint"])){
	$peintC->supprimerPeint($_POST["ID_peint"]);
	header('Location: ../back_peint.php');
}

?>