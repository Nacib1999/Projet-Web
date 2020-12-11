<?php 
include  "../Model/Question.php";
include  "../Controller/questionC.php"; 

echo $_POST['ques'];
$id=$_POST['id'];
$nbcommentaire=$_POST['i']+1;
echo $id;
//if(isset($_POST['titre'])&& isset($_POST['image'])&& isset($_POST['description'])&& isset($_POST['specialite']))
 //{if(!empty($_POST['titre'])&&  !empty($_POST['image'])&&  !empty($_POST['description'])&&  !empty($_POST['specialite']))
	 
	 
	//{
		$question= new Question(

$_POST['ques']);
$question->setIdarticle($id);
$question->setIduser(3);



$questionc= new questionC;
$questionc->ajouterquestion($question);

$questionc->updatenbcomm($id,$nbcommentaire)	;

header('Location:http://localhost/Projet-Web-main/Mes%20Sites%20Web/SanteK%20Frontend/www.smartpixel.tech/smartmed/news-single.php?id='.$id);
// }
 //}
 ?>