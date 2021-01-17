<?php
    require_once("../modeles/bd.php");
    require_once("../modeles/membre.php");
    $host = "localhost";
    $user = "admin";
    $bdd = "tutore_s3";
    $passwd = "admin";
    $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $adresse=$_POST["adresse"];
    $email=$_POST["email"];
    $quartier=$_POST["quartier"];
    $motDePasse=$_POST["motDePasse"];
    $result=mysqli_query($co,"SELECT * FROM client WHERE email='$email'");
    if(!(mysqli_num_rows($result)==0)) {
        header('Location: ../vues/connexion.html');
    }
    else {
        $membre=new Membre($co, $nom, $prenom, $adresse, $email, $motDePasse, $quartier);
    }
    header('Location: ../vues/connexion.html');
?>