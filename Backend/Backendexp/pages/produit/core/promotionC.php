<?PHP
include "config.php";
//include "../entities/promotion.php";


class PromotionC {
function afficherPromotion ($promotion){
        echo "id: ".$promotion->getId()."<br>";
        echo "nomProduit: ".$promotion->getnomProduit()."<br>";
        echo "prix: ".$promotion->getPrix()."<br>";
        echo "categorie: ".$promotion->getcategorie()."<br>";
        echo "imageProduit: ".$promotion->getimageProduit()."<br>";


    }

    function ajouterPromotion($promotion)
    {
        $sql="insert into produit
        (id,nomProduit,prix,categorie,imageProduit) 
        values (:id, :nomProduit,:prix,:categorie,:imageProduit)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);

        $id=$promotion->getId();
        $nomProduit=$promotion->getnomProduit();
        $prix=$promotion->getPrix();
        $categorie=$promotion->getcategorie();
        $imageProduit=$promotion->getimageProduit();

        
        $req->bindValue(':id',$id);
        $req->bindValue(':nomProduit',$nomProduit);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':categorie',$categorie);
        $req->bindValue(':imageProduit',$imageProduit);



            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
	
	function afficherPromotions(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPromotion($id){
		$sql="DELETE FROM produit where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPromotion($promotion,$id){
		$sql="UPDATE produit SET id=:idd, nomProduit=:nomProduit,prix=:prix,categorie=:categorie, imageProduit=:imageProduit WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$promotion->getId();
        $nomProduit=$promotion->getnomProduit();
        $prix=$promotion->getPrix();
        $categorie=$promotion->getcategorie();
        $imageProduit=$promotion->getimageProduit();
        $datas = array(':idd'=>$idd, ':id'=>$id, ':nomProduit'=>$nomProduit,':prix'=>$prix,':categorie'=>$categorie,':imageProduit'=>$imageProduit);
        $req->bindValue(':idd',$idd);
        $req->bindValue(':id',$id);
		$req->bindValue(':nomProduit',$nomProduit);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':categorie',$categorie);
        $req->bindValue(':imageProduit',$imageProduit);


		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPromotion($id){
		$sql="SELECT * from produit where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListePromotions($id){
		$sql="SELECT * from produit where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>