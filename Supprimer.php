<?php
require 'Pdo.php';

$pdoStat = $conn->prepare('DELETE FROM employes WHERE id_employes=:num LIMIT 1');

$pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);

$eIsOk = $pdoStat->execute();

if($eIsOk){
    echo'Suppression effectué';
}
else{
    echo'Echec de la suppression';
}