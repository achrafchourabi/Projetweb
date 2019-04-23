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
				$photo=$row['photo'];

		
?>
<form method="POST">
<table>
<caption>Modifier produit</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" min="0" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>idsouscat</td>
<td><input type="number" name="idsouscat" min="0" value="<?PHP echo $idsouscat ?>"></td>
</tr>
<tr>
<td>idcat</td>
<td><input type="number" name="idcat" min="0" value="<?PHP echo $idcat ?>"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="number" name="prix" min="0" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>qte</td>
<td><input type="number" name="qte" min="0" value="<?PHP echo $qte ?>"></td>
</tr>
<tr>
<td>etat</td>
<td><input type="number" name="etat" min="0" max="1"> value="<?PHP echo $etat ?>"></td>
</tr>
<tr>
<td>remise</td>
<td><input type="number" name="remise" min="0" max="100"> value="<?PHP echo $remise ?>"></td>
</tr>
<tr>
<td>photo</td>
<td><input type="text" name="photo" > value="<?PHP echo $photo ?>"></td>
</tr>


<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idi" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produit($_POST['id'],$_POST['nom'],$_POST['idsouscat'],$_POST['idcat'],$_POST['prix'],$_POST['qte'],$_POST['etat'],$_POST['remise'], $_POST['photo']);
	$produitC->modifierproduit($produit,$_POST['idi']);
	echo $_POST['idi'];
	header('Location: index.php');
}
?>
</body>
</HTMl>