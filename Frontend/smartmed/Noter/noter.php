<?php
 class noter{
     private $id;
      private $iduser;
	 private $idproduit;
	  private $note;
	  
	    
 
    public function __construct(){
		
	
		
		}
		
		
 
      
		public function setId($id)
		{
			$this->id=$id;
		}
		
		public function setIduser($iduser)
		{
			$this->iduser=$iduser;
		}
		
		
		public function setIdproduit($idproduit)
		{
			$this->idproduit=$idproduit;
		}
		
		
	
		public function setNote($note)
		{
			$this->note=$note;
		}
		
		public function getId(){
			return $this->id;
		}
	public function getIduser()
		{
			return $this->iduser;
		}
		public function getIdproduit(){
			return $this->idproduit;
		}
		
		
		
	public function getNote(){
			return $this->note;
		}
		
		
}

?>