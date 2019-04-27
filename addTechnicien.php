<?PHP
include "../entities/technicien.php";
include "../../config.php";

include "../core/technicienCore.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['date']) and isset($_POST['lieu'])and isset($_POST['specialite']) and isset($_POST['salaire'])){
$tech1=new technicien($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['lieu'],$_POST['specialite'],$_POST['salaire']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$technicien1C=new technicienCore();
$technicien1C->ajouterTechnicien($tech1);
header('Location: afficherTechnicien.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>