
<?PHP
include "../../../controller/eventC.php";
include "../../../config.php";



if (isset($_POST['id_par']) and isset($_POST['nom_par']) and isset($_POST['prenom_par'])){
	$eventC->ajouterParticipants($_POST["id_par"],$_POST["nom_par"],$_POST["prenom_par"]);
	$event1C=new eventC();
	$event1C->ajouterParticipant($event1);
	header('statutLogin.php');
}	
?>



