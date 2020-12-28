<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/Commande.php";
include "../core/CommandeCore.php";
if (isset($_GET['idCommande'])){
	$CommandeC=new CommandeCore();
    $result=$CommandeC->recupererCommande($_GET['idCommande']);
	foreach($result as $row){
		$idCommande=$row['idCommande'];
		$dateCommande=$row['dateCommande'];
		$montantCommande=$row['montantCommande'];
		$etatCommande=$row['etatCommande'];
		$IdClient=$row['IdClient'];
?>
<form method="POST">
<table>
<caption>Modifier Commande</caption>
<tr>
<td>idCommande</td>
<td><input type="number" name="idCommande" value="<?PHP echo $idCommande ?>"></td>
</tr>
<tr>
<td>dateCommande</td>
<td><input type="text" name="dateCommande" value="<?PHP echo $dateCommande ?>"></td>
</tr>
<tr>
<td>montantCommande</td>
<td><input type="text" name="montantCommande" value="<?PHP echo $montantCommande ?>"></td>
</tr>
<tr>
<td>etatCommande </td>
<td><input type="number" name="etatCommande" value="<?PHP echo $etatCommande ?>"></td>
</tr>
<tr>
<td>id Client</td>
<td><input type="text" name="IdClient" value="<?PHP echo $IdClient ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idCommande_ini" value="<?PHP echo $_GET['idCommande'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Commande=new Commande($_POST['idCommande'],$_POST['dateCommande'],$_POST['montantCommande'],$_POST['etatCommande'],$_POST['IdClient']);
	$CommandeC->modifierCommande($Commande,$_POST['idCommande_ini']);
	echo $_POST['idCommande_ini'];
	header('Location: afficherCommande.php');
}
?>
</body>
</HTMl>