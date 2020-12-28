<?PHP
include "core/promotionC.php";
$promotionCvar=new promotionC();
if (isset($_POST["id"])){
	$promotionCvar->supprimerPromotion($_POST["id"]);
	header('Location: afficherPromotion.php');
}

?>