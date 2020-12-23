<?php 
require_once "../config.php";
class UtilisateurC{
public function connexionUser($email,$password){
			$sql="SELECT * From Utilisateur where email='".$email."' and password='".$password."'";
						$db=config::getConnexion();
			try{
			$query=$db->prepare($sql);
			$query->execute();
			$count=$query->rowCount();
			if($count==0){
			$message="pseudo ou le mot de passe est incorrect";}
			else{$x=$query->fetch();
			$message=$x['email'];
			
			}
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			return $message;
}


public function recuperuser($email,$password){
			$sql="SELECT * From Utilisateur where email='".$email."' and password='".$password."'";
			$db=config::getConnexion();
			try{
			$liste=$db->query($sql);
			
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function recupererusers($id){
			$sql="SELECT * From Utilisateur where id=".$id."";
			$db=config::getConnexion();
			try{
			$liste=$db->query($sql);
			
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}










}
?>