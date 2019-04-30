<?PHP
	include 'C:\wamp64\www\STMP\entities\requeteass.php';
include 'C:\wamp64\www\STMP\core\requeteassC.php';


if (isset($_POST['IdClient']) and isset($_POST['IdService']) and isset($_POST['Email'])  and isset($_POST['typeC'])and isset($_POST['Objet'])) {
$requeteass1=new requeteAss($_POST['IdClient'],$_POST['IdService'],$_POST['Email'],$_POST['typeC'],$_POST['Objet']);





$requete1C=new requeteAssC();
$requete1C->ajouterRequete($requeteass1);
header('Location: afficher_req.php');

}

else{
	echo "vérifier les champs";
}


?>