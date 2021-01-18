<?php
    session_start();
    require_once("../modeles/bd.php");
    require_once("../modeles/commande.php");
    $host = "localhost";
    $user = "admin";
    $bdd = "tutore_s3";
    $passwd = "admin";
    $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
    $numLivraison=$_POST['numLivraison'];
    $mail = $_SESSION["email"];


    echo $numLivraison;

    $result = mysqli_query($co,"SELECT * FROM livraison NATURAL JOIN client WHERE numLivraison='$numLivraison' AND email='$mail'");
    if(!(mysqli_num_rows($result)==0)) {
        $commande=new Commande($co, $numLivraison);
        /*$commande->suppression_commande();*/       
    }
    else {
        header('Location: ../vues/espace_client.html');
    }
    header('Location: ../vues/espace_client.html');
?>