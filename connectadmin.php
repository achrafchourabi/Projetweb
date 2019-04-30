<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'C:/wamp64/www/test/core/adminC.php';


$admin = new adminC();
$u=$admin->Logedin($_POST['email'],$_POST['mdp']);

echo"hello";
$vide=false;
if (!empty($_POST['email']) && !empty($_POST['mdp'])){
	echo "hi";
	foreach($u as $t){
		$vide=true;
	if ( strtolower($t['email'])== strtolower($_POST['email']) && $t['mdp']==$_POST['mdp']){
		session_start();
		$_SESSION['l']=$_POST['email'];
		$_SESSION['p']=$_POST['mdp'];
		
		header("location: http://localhost/Dashio/index.php");
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=http://localhost/Projet%20Web/home.html">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="s'inscrire.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>