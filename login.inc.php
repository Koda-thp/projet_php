<?php
require 'Pdo.php';
require 'navbar.php';


if (isset($_POST["submit"])){

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $password = $_POST["password"];

    require_once 'function.inc.php';

    if(emptyInput($nom, $prenom, $password) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }
}
else{
    header("location: ../login.php");
    exit();  
}