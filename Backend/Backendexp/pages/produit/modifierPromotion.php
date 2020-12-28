<HTML>
<head>

<Meta charset="utf-8" http-equiv="Content-Type" content="text/html" >
        <TITLE>Modifier Crud </TITLE> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" type= "text/css" href= "publicity-style.css"> 
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>


</head>
<body>
<?PHP
include"entities/promotion.php" ;
include"core/promotionC.php";
if(isset($_GET['id']))
{
$promotionCvar= new promotionC();
$result=$promotionCvar->recupererPromotion($_GET['id']);
foreach($result as $row)
{
$id=$row['id'];
$nomProduit=$row['nomProduit'];
$prix=$row['prix'];
$categorie=$row['categorie'];
$imageProduit=$row['imageProduit'];



?>
<form method="POST">
<table>
<caption>Modifier Promotion</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>nomProduit</td>
<td><input type="text" name="nomProduit" value="<?PHP echo $nomProduit ?>"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="float" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>categorie</td>
<td><input type="text" name="categorie" value="<?PHP echo $categorie ?>"></td>
</tr>
<tr>
<td>imageProduit</td>
<td><input type="file" name="imageProduit" value="<?PHP echo $imageProduit ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP 
}
}
if(isset($_POST['modifier']))
{
$promotionvar=new promotion($_POST['id'],$_POST['nomProduit'],$_POST['prix'],$_POST['categorie'],$_POST['imageProduit']);
$promotionCvar->modifierPromotion($promotionvar,$_POST['id_ini']);
echo $_POST['id_ini'];
header('Location: afficherPromotion.php');
}
?>
</body>
</HTML>
