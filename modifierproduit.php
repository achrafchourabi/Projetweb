<HTML>
<head>
</head>
<body>
<?PHP
include "C:/wamp64/www/entities/produit.php";
include "C:/wamp64/www/core/produitCore.php";
if (isset($_GET['id'])){
	$produitC=new produitC();
    $result=$produitC->recupererproduit($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$idsouscat=$row['idsouscat'];
		$idcat=$row['idcat'];
		$prix=$row['prix'];
		$qte=$row['qte'];
		$etat=$row['etat'];
		$remise=$row['remise'];
		
?>
<form method="POST">
<table>
<caption>Modifier produit</caption>
<tr>
<td>id</td>
<td><input type="number" name="idcat" value="<?PHP echo $idcat ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nomcat" value="<?PHP echo $nomcat ?>"></td>
</tr>
<tr>
<td>idsouscat</td>
<td><input type="number" name="idcat" value="<?PHP echo $idcat ?>"></td>
</tr>
<tr>
<td>idcat</td>
<td><input type="number" name="idcat" value="<?PHP echo $idcat ?>"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="number" name="idcat" value="<?PHP echo $idcat ?>"></td>
</tr>
<tr>
<td>qte</td>
<td><input type="number" name="idcat" value="<?PHP echo $idcat ?>"></td>
</tr>
<tr>
<td>etat</td>
<td><input type="number" name="idcat" value="<?PHP echo $idcat ?>"></td>
</tr>
<tr>
<td>remise</td>
<td><input type="number" name="idcat" value="<?PHP echo $idcat ?>"></td>
</tr>


<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idcat_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produit($_POST['id'],$_POST['nom'],$_POST['idsouscat'],$_POST['idcat'],$_POST['prix'],$_POST['qte'],$_POST['etat'],$_POST['remise']);
	$produitC->modifierproduit($produit,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: index.php');
}
?>
</body>
</HTMl>