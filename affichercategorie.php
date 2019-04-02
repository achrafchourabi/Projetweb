<?PHP
include "C:/wamp64/www/core/categorieCore.php";
$categorie1C=new categorieC ();
$listecategories=$categorie1C->affichercategorie();

//var_dump($listeEmployes->fetchAll());
?>
<header>	<script type="text/javascript" src="categorie.js"></script>
</header>
<table border="1">
<tr>
<td>idcat</td>
<td>Nomcat</td>

<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listecategories as $row){
	?>
	<tr>
	<td><?PHP echo $row['idcat']; ?></td>
	<td><?PHP echo $row['nomcat']; ?></td>
	
	<td><form method="POST" action="supprimercategorie.php">
	<input type="submit" name="supprimer" value="supprimer" onclick="verif3()">
	<input type="hidden" value="<?PHP echo $row['idcat']; ?>" name="idcat">
	</form>
	</td>
	<td><a href="modifiercategorie.php?idcat=<?PHP echo $row['idcat']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

