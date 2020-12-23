<?php
  class Utilisateur {
     private $id;
      public $nom;
	 private $prenom;
	 private $email;
	 private $login;
	 private $password;
	 private $image;
 
    public function __construct($nom,$prenom,$email,$login,$password){
		
		
		$this->prenom=$prenom;
		$this->nom=$nom;
		$this->email=$email;
		$this->login=$login;
		$this->password=$password;
		
		}
		
		
 
      
		public function setId($id)
		{
			$this->id=$id;
		}
		
		public function setNom($nom)
		{
			$this->nom=$nom;
		}
		
		public function setPrenom($prenom)
		{
			$this->prenom=$prenom;
		}
		
		public function setEmail($email)
		{
			$this->email=$email;
		}
		
		public function setLogin($login)
		{
			$this->login=$login;
		}
		
		public function setPassword($password)
		{
			$this->password=$password;
		}
		
		
		
 
		public function getId(){
			return $this->id;
		}
	public function getImage(){
			return $this->image;
		}
		public function getPrenom(){
			return $this->prenom;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getLogin(){
			return $this->login;
		}
	public function getpassword(){
			return $this->password;
		}
		
	
	
}

?>