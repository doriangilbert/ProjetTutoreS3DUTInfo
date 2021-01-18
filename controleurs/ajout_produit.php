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
    $quantite=$_POST["quantite"];
    $prix=$_POST["prix"];
    $promotion=$_POST["promotion"];
    $lien=$_POST["lien"];
    $result=mysqli_query($co,"SELECT * FROM produit WHERE nomFruitLeg='$nomFruitLeg'");
    if(!(mysqli_num_rows($result)==0)) {
        header('Location: ../vues/prod_stocks.php');
    }
    else {
        $produit=new Produit($co, $lien, $nomFruitLeg, $famille, $quantite, $prix, $promotion);
    }
    header('Location: ../vues/prod_stocks.php');
?>