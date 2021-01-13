<?php
    require_once("../modeles/membre.php");
    $co=$_SESSION["co"];
    $email=$_SESSION["email"];
    $motDePasse=$_SESSION["motDePasse"];
    $membre=new Membre($co, $email, $motDePasse);
    $membre->deconnexion();
    header('Location: ../vues/index.html');
?>