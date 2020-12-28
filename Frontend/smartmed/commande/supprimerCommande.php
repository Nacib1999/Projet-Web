<?PHP
include "../core/commandeCore.php";
$commandeC=new commandeCore();
if (isset($_POST["idCommande"])){
	$commandeC->supprimercommande($_POST["idCommande"]);
	header('Location: affichercommande.php');
}

?>