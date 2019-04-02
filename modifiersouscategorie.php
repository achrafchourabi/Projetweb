<HTML>
<head>
</head>
<body>
<?PHP
include "C:/wamp64/www/entities/souscategorie.php";
include "C:/wamp64/www/core/souscategorieCore.php";
if (isset($_GET['idsouscat'])){
	$souscategorieC=new souscategorieC();
    $result=$souscategorieC->recuperersouscategorie($_GET['idsouscat']);
	foreach($result as $row){
		$idsouscat=$row['idsouscat'];
		$nomsouscat=$row['nomsouscat'];
		$numcat=$row['numcat'];

		
?>
<form method="POST">
<table>
<caption>Modifier Souscategorie</caption>
<tr>
<td>idsouscat</td>
<td><input type="number" name="idsouscat" value="<?PHP echo $idsouscat ?>"></td>
</tr>
<tr>
<td>Nomsouscat</td>
<td><input type="text" name="nomsouscat" value="<?PHP echo $nomsouscat ?>"></td>
</tr>
<tr>
<td>numcat</td>
<td><input type="text" name="numcat" value="<?PHP echo $numcat ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idsouscat_ini" value="<?PHP echo $_GET['idsouscat'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$SousCategorie=new SousCategorie($_POST['idsouscat'],$_POST['nomsouscat'],$_POST['numcat']);
	$souscategorieC->modifiersouscategorie($SousCategorie,$_POST['idsouscat_ini']);
	echo $_POST['idsouscat_ini'];
	header('Location: affichersouscategorie.php');
}
?>
</body>
</HTMl>