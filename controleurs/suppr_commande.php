<?php
    session_start();
    require_once("../modeles/bd.php");
    require_once("../modeles/produit.php");
    $host = "localhost";
    $user = "admin";
    $bdd = "tutore_s3";
    $passwd = "admin";
    $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
    $numLivraison=$_POST['numLivraison']
    $mail = $_SESSION["email"];

    echo $var;
    /* // Num commande ?
    $result = mysqli_query($co,"SELECT * FROM livraison NATURAL JOIN client WHERE numLivraison='$numLivraison' AND email='$mail'");
    if(!(mysqli_num_rows($result)==0)) {
        $produit=new Produit($co, $nomFruitLeg, $famille);
        $produit->suppression();
        /*A tester
    }
    else {
        header('Location: ../vues/prod_stocks.php');
    }
    header('Location: ../vues/prod_stocks.php');*/
?>