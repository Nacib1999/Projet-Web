<?PHP
/**
 *
 */
class promotion
{
  private $id ;
  private $nomProduit;
  private $prix;
  private $categorie;
  private $imageProduit;
  
  function __construct($id,$nomProduit,$prix,$categorie,$imageProduit)
  {
  $this->id=$id;
  $this->nomProduit=$nomProduit;
  $this->prix=$prix;
  $this->categorie=$categorie;
  $this->imageProduit=$imageProduit;
  }
  function getId()
  {
    return $this->id;
  }
  function getnomProduit()
  {
    return $this->nomProduit;
  }
  function getprix()
  {
    return $this->prix;
  }
  function getcategorie()
  {
    return $this->categorie;
  }
  function getimageProduit()
  {
    return $this->imageProduit;
  }
  

  function setId($id)
  {
    $this->id=$id;
  }
  function setnomProduit($nomProduit)
  {
    $this->nomProduit=$nomProduit;

  }
  function setprix($prix)
  {
    $this->prix=$prix;

  }

  function setcategorie($categorie)
  {
    $this->categorie=$categorie;

  }
  function setimageProduit($imageProduit)
  {
    $this->imageProduit=$imageProduit;

  }
 
}
?>
