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
  private $iduser;
  private $note;
  function __construct($nomProduit,$prix,$categorie,$imageProduit)
  { 
  $this->nomProduit=$nomProduit;
  $this->prix=$prix;
  $this->categorie=$categorie;
  $this->imageProduit=$imageProduit;
  }
  function getId()
  {
    return $this->id;
  }
  function getIduser()
  {
    return $this->iduser;
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
  function setIduser($iduser)
  {
    $this->iduser=$iduser;
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
