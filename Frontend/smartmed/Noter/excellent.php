<?php
include  "noter.php";
include  "noterC.php";
session_start();
$noteC= new noteC();

$iduser=$_SESSION['id'];
$idarticle=$_GET['idproduit'];
echo $idproduit;
$exist=$noteC->existe($idproduit,$iduser);
 if($exist==0)
 {
	


	$noteC->ajouternote5($iduser ,$idproduit);
 }

header('Location:http://localhost/Projet-Web-main/Mes%20Sites%20Web/SanteK%20Frontend/www.smartpixel.tech/smartmed/news-single.php?id='.$idproduit);

?>