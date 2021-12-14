<?php
require 'Pdo.php';

$pdoStat = $conn->prepare('SELECT * FROM employes WHERE id_employes=:num');

$pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);

$eIsOk = $pdoStat->execute();

$contact = $pdoStat->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="form.css">
    <title>Modification</title>
</head>
<body>
    <h1 style="text-align: center;">
        Modifie saucisse !
    </h1>
    <form name='inscription' action='modif.php?numContact=<?= $contact['id_employes'] ?>' method="post">
        <div class="form-group">
        <label for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp" placeholder="Nom" value="<?= $contact['nom'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="emailHelp" placeholder="Prenom" value="<?= $contact['prenom'] ?>">
            </div>
            <label for="exampleInputEmail1">Sexe : </label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="sexe" name="sexe" value="option1" value="<?= $contact['sexe'] ?>">
                <label class="form-check-label" for="inlineCheckbox1">M</label>
                <input class="form-check-input" type="checkbox" id="sexe" name="sexe" value="option2" value="<?= $contact['sexe'] ?>">
                <label class="form-check-label" for="inlineCheckbox2">F</label>
            </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Service</label>
        <input type="text" class="form-control" id="service" name="service" placeholder="Service" value="<?= $contact['service'] ?>">
        </div>
        <label for="exampleInputPassword1">Date d'embauche</label>
        <input type="date" id="date_embauche" name="date_embauche" value="2018-07-22" min="2018-01-01" max="2018-12-31" value="<?= $contact['date_embauche'] ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Salaire</label>
            <input type="fname" class="form-control" id="salaire" name="salaire" aria-describedby="emailHelp" placeholder="Salaire" value="<?= $contact['salaire'] ?>">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp" placeholder="password" value="<?= $contact['password'] ?>">
            </div>
        <br>
        <button type="submit" class="btn btn-primary btn-lg btn-block" name="valider">Enregistrer les modifications</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

