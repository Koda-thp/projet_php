<?php
require 'Pdo.php';
require 'navbar.php';



$pdoStat = $conn->prepare('UPDATE employes set nom=:nom, prenom=:prenom, sexe=:sexe, service=:service, date_embauche=:date_embauche, salaire=:salaire, password=:password WHERE id_employes=:num LIMIT 1');

$pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);
$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':sexe', $_POST['sexe'], PDO::PARAM_STR);
$pdoStat->bindValue(':service', $_POST['service'], PDO::PARAM_STR);
$pdoStat->bindValue(':date_embauche', $_POST['date_embauche'], PDO::PARAM_STR);
$pdoStat->bindValue(':salaire', $_POST['salaire'], PDO::PARAM_INT);
$pdoStat->bindValue(':password', $_POST['password'], PDO::PARAM_STR);

$eIsOk = $pdoStat->execute();

if($eIsOk){
    echo'Modification effectué';
}
else{
    echo'Echec de la modification';
}