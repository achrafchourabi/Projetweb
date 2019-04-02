<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>STMG Admin</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
</head>


<?PHP
include "../entities/client.php";
include "../core/client.php";

if (isset($_POST['CIN']) and isset ($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['sexe']) and isset($_POST['dateNaissance']) and isset($_POST['nomSociete']) and isset($_POST['adresse']) and isset($_POST['ville']) and isset($_POST['codePostal']) and isset($_POST['pays']) and isset($_POST['tel']) and isset($_POST['fax']) and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['confmdp'])){
$client1=new client($_POST['CIN'], $_POST['nom'], $_POST['prenom'], $_POST['sexe'], $_POST['dateNaissance'], $_POST['nomSociete'],$_POST['adresse'], $_POST['ville'], $_POST['codePostal'], $_POST['pays'], $_POST['tel'], $_POST['fax'], $_POST['email'],$_POST['mdp'], $_POST['confmdp']);
$client=new ClientC();
$clientC->ajouterClient($client1);
header('Location: afficherClient.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>