<?PHP
include "C:/wamp64/www/test/entities/evaluation.php";
include "C:/wamp64/www/test/core/evaluationC.php";

if (isset($_POST['Note']) and isset($_POST['Idlivreur']) ){
$evaluation1=new evaluation(1,$_POST['Note'],$_POST['Idlivreur']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$evaluation1C=new evaluationC();
$evaluation1C->ajouterEvaluation($evaluation1);
header('Location: afficherEvaluation.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>