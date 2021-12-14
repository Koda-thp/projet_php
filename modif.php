<?php
require 'Pdo.php';

$pdoStat = $conn->prepare('UPDATE employes set nom=:nom, prenom=:prenom, sexe=:sexe, service=:service, date_embauche=:date_embauche, salaire=:salaire, password=:password, id_employes=:num LIMIT 1');

$pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);
