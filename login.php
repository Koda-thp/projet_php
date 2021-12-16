<?php 
require 'Pdo.php';


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

    <title>Connection</title>
</head>
<body>
    <h1 style="text-align: center;">
        Connecte toi saucisse !
    </h1>
    <form name='inscription' method="get">
        <div class="form-group">
        <label for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="emailHelp" placeholder="Prenom">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp" placeholder="password">
            </div>
        <br>
        <button type="submit" class="btn btn-primary btn-lg btn-block" name="valider">Clique si tu l'oses</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

