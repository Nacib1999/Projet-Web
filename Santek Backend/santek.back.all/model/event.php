<?PHP
class Evenement{
    private $id_event;
	private $nom_event;
	private $lieu_event;
	private $date_debut;
	private $date_fin;

	
	function __construct($nom_event,$lieu_event,$date_debut,$date_fin){		
		$this->nom_event=$nom_event;
		$this->lieu_event=$lieu_event;
		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;

		
	}

    function getid_event(){
		return $this->id_event;
	}
	function getnom_event(){
		return $this->nom_event;
	}
    function getlieu_event(){
		return $this->lieu_event;
	}
	function getdate_debut(){
		return $this->date_debut;
	}
	function getdate_fin(){
		return $this->date_fin;
	} 



	
	function setid_event($id_event){
		$this->id_event=$id_event;
	}
	function setnom_event($nom_event){
		$this->nom_event=$nom_event;
	}
    function setlieu_event($lieu_event){
		$this->lieu_event=$lieu_event;
	}
    function setdate_debut($date_debut){
		$this->date_debut=$date_debut;
	}
	function setdate_fin($date_fin){
		$this->date_fin=$date_fin;
	}

	
}

class participant{
    private $id_par;
	private $nom_par;
	private $prenom_par;


	
	function __construct($nom_par,$prenom_par){		
		$this->nom_par=$nom_par;
		$this->prenom_par=$prenom_par;
			
	}

    function getid_par(){
		return $this->id_par;
	}
	function getnom_par(){
		return $this->nom_par;
	}
    function getprenom_par(){
		return $this->prenom_par;
	}

	function setid_par($id_par){
		$this->id_par=$id_par;
	}
	function setnom_par($nom_par){
		$this->nom_par=$nom_par;
	}
    function setprenom_par($prenom_par){
		$this->prenom_par=$prenom_par;
	}
	
} 

?>