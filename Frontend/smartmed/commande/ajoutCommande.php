<?PHP
include "../entities/commande.php";
include "../core/commandeCore.php";

if (isset($_POST['idCommande']) and isset($_POST['DateCommande']) and isset($_POST['MontantCommande']) and isset($_POST['EtatCommande']) and isset($_POST['IdClient'])){
$commande1=new commande($_POST['idCommande'],
$_POST['DateCommande'],$_POST['MontantCommande'],
$_POST['EtatCommande'],$_POST['IdClient']);
$commande1C=new commandeCore();
$commande1C->ajoutercommande($commande1);
header('Location: affichercommande.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>