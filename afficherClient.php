<?PHP
include "../core/client.php";
$client1C=new ClientC();
$listeClients=$client1C->afficherClients();

//var_dump($listeClients->fetchAll());
?>
<table border="1">
<tr>
<td>CIN</td>
<td>Nom</td>
<td>Prenom</td>
<td>sexe</td>
<td>Dateate de Naissance</td>
<td>Nom Société</td>
<td>Adresse</td>
<td>Ville</td>
<td>CodePostal</td>
<td>Pays</td>
<td>Tel</td>
<td>Fax</td>
<td>Email</td>
<td>Mot de Passe</td>
</tr>

<?PHP
foreach($listeClients as $row){
	?>
	<tr>
	<td><?PHP echo $row['CIN']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['sexe']; ?></td>
	<td><?PHP echo $row['dateNaissance']; ?></td>
	<td><?PHP echo $row['nomSociete']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['ville']; ?></td>
	<td><?PHP echo $row['codePostal']; ?></td>
	<td><?PHP echo $row['pays']; ?></td>
	<td><?PHP echo $row['tel']; ?></td>
	<td><?PHP echo $row['fax']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['mdp']; ?></td>
	
	<td><form method="POST" action="supprimerClient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['CIN']; ?>" name="CIN">
	</form>
	</td>
	<td><a href="modifierClient.php?cin=<?PHP echo $row['CIN']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


