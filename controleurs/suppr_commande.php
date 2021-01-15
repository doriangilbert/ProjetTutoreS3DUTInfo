<?php
    session_start();
    require_once("../modeles/bd.php");
    require_once("../modeles/produit.php");
    $host = "localhost";
    $user = "admin";
    $bdd = "tutore_s3";
    $passwd = "admin";
    $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
    $numCommande=$_POST["var"];
    $mail = $_SESSION["email"];
    
    $result = mysqli_query($co,"SELECT * FROM livraison NATURAL JOIN client WHERE numCommande='$numCommande' AND email='$mail'");
    if(!(mysqli_num_rows($result)==0)) {
        $produit=new Produit($co, $nomFruitLeg, $famille);
        $produit->suppression();
        /*A tester*/
    }
    else {
        header('Location: ../vues/prod_stocks.php');
    }
    header('Location: ../vues/prod_stocks.php');
?>