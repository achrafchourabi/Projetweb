<?PHP

include "../../Services/entities/restaurant.php";
$restC=new Resto(1,'shit','fuck','hey','lol','nice');
if (isset($_POST["ID_resto"])){
	$restC->supprimerResto($_POST["ID_resto"]);
	header('Location: ../back_resto.php');
}

?>