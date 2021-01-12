
<?php

    $host = "localhost";
    $user = "admin";
    $bdd = "tutore_s3";
    $passwd = "admin";
    $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
    
    $date=$_POST["date"];

    if(isset($_POST['date']))
    {
        $result = mysqli_query($co,"INSERT INTO livraison (nomTypeLivraison,limitePrix,rythmeLivraison,dateLivraison,dateCommande,nbPersonne) VALUES ('ponctuelle', 0, '', CAST('". $date ."' AS DATE)), '')") or die("Erreur d'insertion");
        header('Location: ../vues/valide.html');
    }
?>