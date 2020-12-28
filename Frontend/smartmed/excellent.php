<?php
include  "noter.php";
include  "noterC.php";
session_start();
$noteC= new noteC();
$iduser=$_SESSION['id'];
$idproduit=$_GET['idproduit'];
echo $idproduit;
echo $iduser;

$exist=$noteC->existe($idproduit,$iduser);
 if($exist==0)
 {
	


	$noteC->ajouternote3($iduser ,$idproduit);
 }$nb=$noteC->sommenote($idproduit)/$noteC->countt($idproduit)
	;
 $noteC->updatenbnote($idproduit , $nb);

 header('Location:http://localhost/Frontend/smartmed/team.php?id='.$idproduit);

?>