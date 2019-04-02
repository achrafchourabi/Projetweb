<?PHP
include "../core/client.php";
$clientC=new ClientC();
if (isset($_POST["CIN"])){
	$clientC->supprimerClient($_POST["CIN"]);
	header('Location: afficherClient.php');
}

?>