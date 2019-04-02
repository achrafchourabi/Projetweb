<?PHP
include "C:/wamp64/www/core/souscategorieCore.php";
$souscategorie1C=new souscategorieC ();
$listesouscategories=$souscategorie1C->affichersouscategorie();

//var_dump($listeEmployes->fetchAll());
?>
<header>	<script type="text/javascript" src="souscategorie.js"></script>
</header>
<table border="1">
<tr>
<td>idsouscat</td>
<td>Nomsouscat</td>
<td>categorie</td>


<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listesouscategories as $row){
	?>
	<tr>
	<td><?PHP echo $row['idsouscat']; ?></td>
	<td><?PHP echo $row['nomsouscat']; ?></td>
	<td><?PHP echo $row['numcat']; ?></td>

	
	<td><form method="POST" action="supprimersouscategorie.php">
	<input type="submit" name="supprimer" value="supprimer" onclick="verif3()">
	<input type="hidden" value="<?PHP echo $row['idsouscat']; ?>" name="idsouscat">
	</form>
	</td>
	<td><a href="modifiersouscategorie.php?idsouscat=<?PHP echo $row['idsouscat']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

