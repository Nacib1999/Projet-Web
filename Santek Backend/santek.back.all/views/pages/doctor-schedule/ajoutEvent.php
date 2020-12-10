
<?PHP
include "../../../model/event.php";
include "../../../controller/eventC.php";
include "../../../config.php";

if (isset($_POST['nom_event']) and isset($_POST['lieu_event']) and isset($_POST['date_debut']) and isset($_POST['date_fin'])){
	
$event1=new evenement($_POST['nom_event'],$_POST['lieu_event'],$_POST['date_debut'],$_POST['date_fin']);

$event1C=new eventC();
$event1C->ajouterEvent($event1);

/*ini_set('smtp_port', 587);
 $header="MIME-Version: 1.0\r\n";
 $header.='From:"SanteK.tn"<SanteK.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message="Cher Client, \n Un Nouveau Evenement Est Disponnible Dans Notre Site Web ";
 mail("mariem.nacib@esprit.tn", "Nouveau event !", $message, $header); 
*/
header('Location: afficher.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>