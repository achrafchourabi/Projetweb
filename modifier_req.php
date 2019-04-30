<?php

ob_start();
?>

<html>
<head>

<title> SAV</title>

<div class="page-head">
	<div class="container">
		<h3>Notre service après vente</h3>
	</div>
</div>




	<?php
	include 'C:\wamp64\www\STMP\entities\requeteass.php';
include 'C:\wamp64\www\STMP\core\requeteassC.php';
	if (isset($_GET['idReq'])){
	$requeteAssC=new requeteAssC();
    $result=$requeteAssC->recupererRequeteAss($_GET['idReq']);
	foreach($result as $row){
		$idReq=$row['idReq'];
		$IdClient=$row['IdClient'];
		$IdService=$row['IdService'];
		$Email=$row['Email'];
		$typeC=$row['typeC'];
		$Objet=$row['Objet'];
		
		

?>
<form method="POST" >
<table align="center">
<caption> <h3 h6 align="center" style ="color:#8e172c">Modifier Requete d'assistance</caption></h3>
<tr></br>
<td> <h6  align="center" style ="color:#8e172c">Identifiant de la requete</td></h6>
<td><input type="number" name="idReq" value="<?PHP echo $idReq ?>"></td></br>
</tr>
<tr>
<td><h6  align="center" style ="color:#8e172c">Identifiant du client</td></h6></br>
<td><input type="number" name="IdClient" value="<?PHP echo $IdClient ?>"></td></br>
</tr>

<tr>
	<td><h6 align="center" style ="color:#8e172c">identifiant du service </td></h6></br>
<td><input type="text" name="IdService" value="<?PHP echo $IdService ?>"></td></br></br></td>
</tr>

<tr>
<td><h6 align="center" style ="color:#8e172c">Email </td></h6></br>
<td><input type="text" name="Email" value="<?PHP echo $Email ?>"></td></br></br>
</tr>

<tr>
	<td><h6 align="center" style ="color:#8e172c">Type  </td></h6></br>
<td><input type="text" name="typeC" value="<?PHP echo $typeC ?>"></td></br></br></td>
</tr>
<tr>
<td><h6 align="center" style ="color:#8e172c">Objet</td></h6></br>
<td><input type="text" name="Objet" value="<?PHP echo $Objet ?>"></td></br>
</tr>
<tr>

<tr>

<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>

<tr>
<td></td>
<td><input type="hidden" name="idReq" value="<?PHP echo $_GET['idReq'];?>"></td>
</tr>
</table>

</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$requeteAss=new requeteAss($_POST['IdClient'],$_POST['IdService'],$_POST['Email'],$_POST['typeC'],$_POST['Objet']);
	$requeteAssC->modifierRequeteAss($requeteAss,$_POST['idReq']);
	echo $_POST['idReq'];
	header('Location: afficher_req.php');
}
	 ?>


</div>
</table>
</body>
</html>