<?php
    require_once("../modeles/bd.php");
    require_once("../modeles/produit.php");
    $host = "localhost";
    $user = "admin";
    $bdd = "tutore_s3";
    $passwd = "admin";
    $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();

    $quantite = array();

    foreach ($_POST['numProduit'] as $value) {
        array_push($quantite, $value);
    }

    foreach($array as $value) {
        print $value;
    }

    //header('Location: ../vues/livraison.html');
?>