<?PHP

include "../../Services/entities/Elect.php";
$electC=new Elect(1,'shit','hey','lol','nice');
if (isset($_POST["ID_elect"])){
	$electC->supprimerElect($_POST["ID_elect"]);
	header('Location: ../back_Elect.php');
}

?>