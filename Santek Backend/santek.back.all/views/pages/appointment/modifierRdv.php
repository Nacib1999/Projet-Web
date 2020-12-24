<?php
    include "../../../controller/function.php";
    include "../../../model/class.php";
    //include "../../../config.php";
	$function=new consul;
	$listeRdv=$function;
    // create an instance of the controller     
    $function = new consul();
	$rows = [];
	if(isset($_GET['id_rdv']))
	{
		if(!empty($_GET['id_rdv']))
		{
			$rows = $function->consulterRdv((int)$_GET['id_rdv']);
		}
		//else 
			//header("Location: appointment-list.php");
	}
	else 
	//	header("Location: appointment-list.php");
	
	if (
        isset($_POST["id_rdv"]) &&       
        isset($_POST["id_medecin"]) &&
        isset($_POST["date_rdv"]) && 
		isset($_POST["noms"]) &&
        isset($_POST["prenoms"]) && 
        isset($_POST["description"]) 
    ) {
        if (
            !empty($_POST["id_rdv"]) && 
            !empty($_POST["id_medecin"]) && 
            !empty($_POST["date_rdv"]) && 
			!empty($_POST["noms"]) && 
            !empty($_POST["prenoms"]) && 
            !empty($_POST["description"]) 
        ) {
            $rdv= new fucntion(           
                $_POST['id_rdv'],
                $_POST['id_medecin'], 
                $_POST['date_rdv'],
				$_POST['noms'], 
                $_POST['prenoms'],
                $_POST['description']
            );
            $function->modifierRdv((int) $_POST['id_rdv'], $id_rdv);
            header('Location:appointment-list.php.');
        }
        //else
           // $error = "Missing information";
    }
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="submit" method="POST" action="ajouterRdv1.php">
                <fieldset>
                    <center>
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
            
                            <p>
                                <input class="col-12" id="first_name" type="text" name="first_name" value="<?PHP echo $rows['first_name']; ?>" placeholder="" required>
                                <span></span>
                                <label for="first_name">Nom</label>
                            </p>
            
                        </div><!-- col -->
                        <div class="col-md-6 col-lg-3">
            
                            <p>
                                <input class="col-12" id="last_name" type="text" name="last_name" value="<?PHP echo $rows['last_name']; ?>" placeholder="" required>
                                <span></span>
                                <label for="last_name">Prénom</label>
                            </p>
            
                        </div><!-- col -->
                        <div class="col-md-6 col-lg-3">
            
                            <p>
                                <input class="col-12" id="email" type="text" name="email" value="<?PHP echo $rows['email']; ?>" placeholder="" required>
                                <span></span>
                                <label for="email">E-mail</label>
                            </p>
            
                        </div><!-- col -->
                        <div class="col-md-6 col-lg-3">
            
                            <p>
                                <input class="col-12" id="phone" type="number" name="phone" value="<?PHP echo $rows['phone']; ?>" placeholder="" required>
                                <span></span>
                                <label for="phone">Numéro de Téléphone</label>
                            </p>
            
                        </div><!-- col -->
                        <div class="col-md-6 col-lg-3">
            
                            <p>
                                <select class="col-12" id="speciality" name="speciality" value="<?PHP echo $rows['speciality']; ?>" type="text">
                                    <option value="-1" disabled selected>Choisir une spécialée</option>
                                    <option value="1">Cardiology</option>
                                    <option value="2">Neurology</option>
                                    <option value="3">Surgery</option>
                                    <option value="4">Gynaecology</option>
                                    <option value="5">Ophthalmology</option>
                                    <option value="6">Stomatology</option>
                                </select>
                                <span></span>
                                <i class="fa fa-angle-down"></i>
                                <label for="speciality">Specialées</label>
                            </p>
            
                        </div><!-- col -->
                        <div class="col-md-6 col-lg-3">
            
                            <p>
                                <input class="col-12" id="date1" type="date" name="date1" value="<?PHP echo $rows['date1']; ?>" required>
                                <span></span>
                                <label for="date">Date de Rendez-Vous</label>
                            </p>
            
                        </div><!-- col -->
                        <div class="col-md-6 col-lg-3">
            
                            <p>
                                <input class="col-12" id="hours" type="time" name="hours" value="<?PHP echo $rows['hours']; ?>" required>
                                <span></span>
                                <label for="hours">Heurs</label>
                            </p>
            
                        </div><!-- col -->
                    </div><!-- row -->
            
                    <p>
                        <textarea class="col-12" id="description" name="description" rows="5" cols="25" value="<?PHP echo $rows['description']; ?>" placeholder="" required></textarea>
                        <span></span>
                        <label for="observations">Observations</label>
                    </p>
            
                    <button class="btn btn-default waves" id="submit" type="submit" name="submit" value="">Prendre Un Rendez-Vous</button>
                </center>
                </fieldset>
            </form>

</body>
</html>
