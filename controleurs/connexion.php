<?php
    require_once("../modeles/bd.php");
    require_once("../modeles/membre.php");
    $host = "localhost";
    $user = "admin";
    $bdd = "tutore_s3";
    $passwd = "admin";
    $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
    $email=$_POST["email"];
    $motDePasse=$_POST["motDePasse"];
    $result=mysqli_query($co,"SELECT * FROM client WHERE email='$email' AND motDePasse='$motDePasse'");
    if(!(mysqli_num_rows($result)==0)) {
        $membre=new Membre($co, $email, $motDePasse);
        $membre->connexion();
        
        $row = mysqli_fetch_assoc($result);
        $producteur = $row["producteur"];
        $_SESSION['producteur'] = $row["producteur"];
        $_SESSION['numClient'] = $row["numClient"];
        echo $_SESSION['numClient'];
        if($producteur==true) {
            header('Location: ../vues/espace_producteur.html');
        }
        else {
            header('Location: ../vues/espace_client.html');
        }
    }
    else {
        header('Location: ../vues/inscription.html');
    }
?>