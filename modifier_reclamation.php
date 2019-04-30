<?php
ob_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>SAV</title>


<div class="page-head">
	<div class="container">
		<h3>Notre service après vente</h3>
	</div>
</div>
<!-- //banner -->














<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<<?php 
	include 'C:\wamp64\www\STMP\entities\reclamation.php';
include 'C:\wamp64\www\STMP\core\reclamationC.php';
	if (isset($_GET['IdReclamation'])){
	$reclamationC=new reclamationC();
    $result=$reclamationC->recupererReclamation($_GET['IdReclamation']);
	foreach($result as $row){
		$IdReclamation=$row['IdReclamation'];
		$IdClient=$row['IdClient'];
		$DateAjout=$row['DateAjout'];
		$type=$row['type'];
		$Sujet=$row['Sujet'];
		$Etat=$row['Etat'];
		

?>
<fieldset >
<form method="POST" >
	<h3 align="center" style="color:#8e172c" > VEUILLEZ RECTIFIER VOTRE RECLAMATION </h3> </br> </br>
	
<table align="center">

<tr>
<td> <h6 align="center" style ="color:#8e172c"> Identifiant de la relcamation </h6></td>
<td><input type="number" name="IdReclamation" value="<?PHP echo $IdReclamation ?>"></td>
</tr>
<tr>
<td> <h6 align="center" style ="color:#8e172c">Identifiant du client</h6></td>
<td><input type="number" name="IdClient" value="<?PHP echo $IdClient ?>"></td>
</tr>
<tr>
	<?php
						$date = date("d/m/Y à H:i:s");
						?>
<td> <h6 align="center" style ="color:#8e172c">Date d'ajout de la reclamation</h6></td>
<td><input type="text"  name="DateAjout" value="<?php echo $date;?>"></td>
</tr>
<tr>
<td> <h6 align="center" style ="color:#8e172c">type</h6></td>
<td><input type="text" name="type" value="<?PHP echo $type ?>"></td>
</tr>
<tr>
<td> <h6 align="center" style ="color:#8e172c">Sujet</h6></td>
<td><input type="text" name="Sujet" value="<?PHP echo $Sujet ?>"></td>
</tr>
<tr>
<td> <h6 align="center" style ="color:#8e172c">Etat</h6></td>
<td><input disabled="disabled" type="text" name="Etat" value="<?PHP echo $Etat ?>"></td>
</tr>
<tr>

<td></td>
<td><input type="submit" name="modifier" value="modifier" <a href="afficher_reclamation.<?php  ?>"></a>></td>

<tr>
<td></td>
<td><input type="hidden" name="IdReclamation" value="<?PHP echo $_GET['IdReclamation'];?>"></td>
</tr>
</table>

</form>
</fieldset>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$reclamation=new reclamation($_POST['IdClient'],$_POST['DateAjout'],$_POST['type'],$_POST['Sujet'],$_POST['Etat']);
	$reclamationC->modifierReclamation($reclamation,$_POST['IdReclamation']);
	echo $_POST['IdReclamation'];
		header('Location: afficher_reclamation.php');
}
	 ?>
</table>
</body>
</html>





