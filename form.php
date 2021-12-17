<?php 
require 'Pdo.php';
require 'navbar.php';



    if (isset ($_POST['valider'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $sexe=$_POST['sexe'];
        $service=$_POST['service'];
        $date_embauche=$_POST['date_embauche'];
        $salaire=$_POST['salaire'];
        $password=$_POST['password'];
        $conn->exec("INSERT INTO employes(id_employes,nom,prenom,sexe,service,date_embauche,salaire,password,role) VALUES('','$nom','$prenom','$sexe','$service','$date_embauche','$salaire','$password','')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="form.css">

    <title>Inscription</title>
</head>
<body>
    <h1 style="text-align: center;">
        Inscris toi saucisse !
    </h1>
    <form name='inscription' method="post">
        <div class="form-group">
        <label for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="emailHelp" placeholder="Prenom">
            </div>
            <label for="exampleInputEmail1" id="sexe">Sexe : </label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="sexe" value="m">
                <label class="form-check-label" for="inlineCheckbox1">M</label>
                <input class="form-check-input" type="checkbox" name="sexe" value="f">
                <label class="form-check-label" for="inlineCheckbox2">F</label>
            </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Service</label>
        <input type="text" class="form-control" id="service" name="service" placeholder="Service">
        </div>
        <label for="exampleInputPassword1">Date d'embauche</label>
        <input type="date" id="date_embauche" name="date_embauche" value="2018-07-22" min="2018-01-01" max="2018-12-31">
        <div class="form-group">
            <label for="exampleInputEmail1">Salaire</label>
            <input type="fname" class="form-control" id="salaire" name="salaire" aria-describedby="emailHelp" placeholder="Salaire">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp" placeholder="password">
            </div>
        <br>
        <button type="submit" class="btn btn-primary btn-lg btn-block" name="valider">Envoyer</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

