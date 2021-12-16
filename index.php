<?php 
require 'Pdo.php';
require 'navbar.php';



$pdoStat = $conn->prepare('SELECT * FROM employes');


$eIsOk = $pdoStat->execute();

$contacts = $pdoStat->fetchAll();

// var_dump($contacts);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Liste des employés</h1>
    <ul>
    <?php foreach ($contacts as $contact ): ?>
        <li>
            <?= $contact['nom'] ?> <?= $contact['prenom'] ?>, secteur  <?= $contact['service'] ?> embauché le : <?= $contact['date_embauche'] ?>, salaire brut : <?= $contact['salaire'] ?>
            <a href="Supprimer.php?numContact=<?= $contact['id_employes'] ?>">Supprimer</a>
            <a href="Modifier.php?numContact=<?= $contact['id_employes'] ?>">Modifier</a>
        </li>
    <?php endforeach; ?>

    </ul>
</body>
</html>