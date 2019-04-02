<?PHP
include "C:/wamp64/www/core/produitCore.php";
$produit1C=new produitC ();
$listeproduits=$produit1C->afficherproduit();

//var_dump($listeEmployes->fetchAll());
?>
<header>	<script type="text/javascript" src="produit.js"></script>
</header>
<table border="1">
<tr>
<td>id</td>
<td>Nom</td>
<td>idsouscat</td>
<td>idcat</td>
<td>prix</td>
<td>qte</td>
<td>etat</td>
<td>remise</td>

<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeproduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['idsouscat']; ?></td>
	<td><?PHP echo $row['idcat']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['qte']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>
	<td><?PHP echo $row['remise']; ?></td>
	
	<td><form method="POST" action="supprimerproduit.php">
	<input type="submit" name="supprimer" value="supprimer" onclick="verif3()">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierproduit.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

