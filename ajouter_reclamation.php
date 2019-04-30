<?PHP
include '../entities/reclamation.php';
include '../core/reclamationC.php';


if (isset($_POST['IdClient']) and isset($_POST['DateAjout']) and isset($_POST['type']) and isset($_POST['Sujet'])and isset($_POST['Etat'])){
$reclamation1=new reclamation($_POST['IdClient'],$_POST['DateAjout'],$_POST['type'],$_POST['Sujet'],$_POST['Etat']);





$reclamation1C=new reclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
var_dump(reclamation1);
header('Location: afficher_reclamation.php');

} else{
	echo "vérifier les champs";
}
//*/

?>