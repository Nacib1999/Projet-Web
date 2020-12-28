<?PHP
include "entities/promotion.php";
include "core/promotionC.php";

session_start();
if ( isset($_POST['nomProduit']) and isset($_POST['prix']) and isset($_POST['categorie'])and isset($_POST['imageProduit']) )
{     
$nomProduit=$_POST['nomProduit'];
    $prix=$_POST['prix'];
    $categorie=$_POST['categorie'];
    $imageProduit=$_POST['imageProduit'];

    
    $promotionvar = new promotion($nomProduit,$prix,$categorie,$imageProduit,);
    $promotionvar->setIduser($_SESSION['id']);
    $promotionCvar= new promotionC() ;
    $promotionCvar->ajouterPromotion($promotionvar);
    header('Location: add-produit.php');
}
    else{
        echo "verifier les champs";
    }

?>