<?PHP
include "../core/CommandeCore.php";
$Commande1C=new CommandeCore();
$listeCommandes=$Commande1C->afficherCommandes();
//var_dump($listeCommandes->fetchAll());
?>
<table border="1">
<tr>
<td>IdCommande</td>
<td>DateCommande</td>
<td>MontantCommande</td>
<td>etatCommande</td>
<td>IdClient</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeCommandes as $row){
	?>
	<tr>
	<td><?PHP echo $row['IdCommande']; ?></td>
	<td><?PHP echo $row['DateCommande']; ?></td>
	<td><?PHP echo $row['MontantCommande']; ?></td>
	<td><?PHP echo $row['etatCommande']; ?></td>
	<td><?PHP echo $row['IdClient']; ?></td>
	
	
	
	
	
	<td><form method="POST" 
	action="supprimerCommande.php">
	<input type="submit" name="supprimer" 
	value="supprimer">
	<input type="hidden" value="<?PHP echo $row['IdCommande']; ?>" name="IdCommande">
	</form>
	</td>
	<td><a href="modifierCommande.php?IdCommande=
	<?PHP echo $row['IdCommande']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


