
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SanteK</title>
	
</head>
	<body>
	<div id="fh5co-instagram">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
					<h2><span>Votre Evenement</span></h2>
				</div>
			</div>
		</div>

<?PHP
include "../../../controller/eventC.php";
include "../../../model/event.php";
include"../../../config.php";
$event1C=new EventC();
$listeEvent=$event1C->afficherStatut($id_par);


?>		
		<?PHP
foreach($listeEvent as $row){
	?>
        
        <div class="container">
<div class="row">

<center>

    <div class="card">
      <div class="card-body">
		<h1 class="card-title">Nom evenement:<?PHP echo $row['nom_event']; ?></h1>
		<h3 class="card-title">Date de debut de l'évenement:<?PHP echo $row['date_debut']; ?></h3>
         <h3 class="card-title">Date de fin de l'évenement:<?PHP echo $row['date_fin']; ?></h3>
         <form method="POST" action="supprimerStatut.php" style="border: none">
       <input type="submit" name="supprimer Votre participation" value="supprimer votre participation" class="btn btn-primary" >
	<input type="hidden" value="<?PHP echo $row['id_event']; ?>" name="id_event">
</form>
       
       
	
	
   <?php
}
?>
      </div>
    </div>
   
    
</center>

</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

