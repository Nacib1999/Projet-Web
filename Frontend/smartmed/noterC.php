<?php 
require_once "config.php";
class noteC{

	public function updatenbnote($idproduit , $nb)
	{
	$sql="UPDATE produit SET note=".$nb." where id=".$idproduit."";
	$db=config::getConnexion();
	try{
	$req=$db->prepare($sql);

	$req->execute();
	}
	catch(Exception $e){
		die('Erreur:' .$e->getMessage());
	}

}

public function existe($idproduit,$iduser){
			$sql="SELECT COUNT(*) AS nb_note FROM noter WHERE idproduit=".$idproduit." and iduser=".$iduser."";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$note = (int) $result['nb_note'];
			return $note;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}

public function sommenote($idproduit){
			$sql="SELECT SUM(note) AS nb_note FROM noter WHERE idproduit=".$idproduit." ";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbnote = (int) $result['nb_note'];
			return $nbnote;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function countt($idproduit){
			$sql="SELECT COUNT(*) AS nb_note FROM noter WHERE idproduit=".$idproduit."";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nb_note = (int) $result['nb_note'];
			return $nb_note;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}


public function ajouternote1($iduser ,$idproduit){
			$sql="INSERT INTO `noter`( `idproduit`, `iduser`,  `note`) VALUES (".$idproduit.",".$iduser.",1)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}


public function ajouternote3($iduser ,$idproduit){
			$sql="INSERT INTO `noter`( `idproduit`, `iduser`,  `note`) VALUES (".$idproduit.",".$iduser.",3)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}


public function ajouternote2($iduser ,$idproduit){
			$sql="INSERT INTO `noter`( `idproduit`, `iduser`,  `note`) VALUES (".$idproduit.",".$iduser.",2)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}

public function ajouternote4($iduser ,$idproduit){
			$sql="INSERT INTO `noter`( `idproduit`, `iduser`,  `note`) VALUES (".$idproduit.",".$iduser.",4)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}
public function ajouternote5($iduser ,$idproduit){
			$sql="INSERT INTO `noter`( `idproduit`, `iduser`,  `note`) VALUES (".$idproduit.",".$iduser.",5)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}











}
?>