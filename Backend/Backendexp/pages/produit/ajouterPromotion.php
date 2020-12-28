<?PHP
include "entities/promotion.php";
include "core/promotionC.php";

if (isset($_POST['id']) and isset($_POST['nomProduit']) and isset($_POST['prix']) and isset($_POST['categorie'])and isset($_POST['imageProduit']) )
{
    $id=$_POST['id'];
    $nomProduit=$_POST['nomProduit'];
    $prix=$_POST['prix'];
    $categorie=$_POST['categorie'];
    $imageProduit=$_POST['imageProduit'];

    
    $promotionvar = new promotion($id,$nomProduit,$prix,$categorie,$imageProduit);
    $promotionCvar= new promotionC() ;
    $promotionCvar->ajouterPromotion($promotionvar);
    header('Location: afficherPromotion.php');
}
    else{
        echo "verifier les champs";
    }

?>