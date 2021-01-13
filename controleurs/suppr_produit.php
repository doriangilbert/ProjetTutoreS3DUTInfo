<?php
    require_once("../modeles/bd.php");
    require_once("../modeles/produit.php");
    $host = "localhost";
    $user = "admin";
    $bdd = "tutore_s3";
    $passwd = "admin";
    $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
    $nomFruitLeg=$_POST["nomFruitLeg"];
    $famille=$_POST["famille"];
    $result=mysqli_query($co,"SELECT * FROM produit WHERE nomFruitLeg='$nomFruitLeg' AND famille='$famille'");
    if(!(mysqli_num_rows($result)==0)) {
        $produit=new Produit($co, $nomFruitLeg, $famille);
        $produit->suppression();
    }
    else {
        header('Location: ../vues/prod_stocks.php');
    }
    header('Location: ../vues/prod_stocks.php');
?>