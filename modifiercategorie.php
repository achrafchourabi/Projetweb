<HTML>
<head>
</head>
<body>
<?PHP
include "C:/wamp64/www/entities/categorie.php";
include "C:/wamp64/www/core/categorieCore.php";
if (isset($_GET['idcat'])){
	$categorieC=new categorieC();
    $result=$categorieC->recuperercategorie($_GET['idcat']);
	foreach($result as $row){
		$idcat=$row['idcat'];
		$nomcat=$row['nomcat'];
		
?>
<form method="POST">
<table>
<caption>Modifier categorie</caption>
<tr>
<td>idcat</td>
<td><input type="number" name="idcat" value="<?PHP echo $idcat ?>"></td>
</tr>
<tr>
<td>Nomcat</td>
<td><input type="text" name="nomcat" value="<?PHP echo $nomcat ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idcat_ini" value="<?PHP echo $_GET['idcat'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$categorie=new categorie($_POST['idcat'],$_POST['nomcat']);
	$categorieC->modifiercategorie($categorie,$_POST['idcat_ini']);
	echo $_POST['idcat_ini'];
	header('Location: affichercategorie.php');
}
?>
</body>
</HTMl>