<?PHP
include 'C:\wamp64\www\STMP\core\requeteassC.php';
$requeteAssC=new requeteAssC();
if (isset($_POST["idReq"])){
	$requeteAssC->supprimerRequeteAss($_POST["idReq"]);
	header('Location: afficher_req.php');
}

?>