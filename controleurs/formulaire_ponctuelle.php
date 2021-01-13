
<?php
    require_once("../modeles/bd.php");
    require_once("../modeles/membre.php");  

    $host = "localhost";
    $user = "admin";
    $bdd = "tutore_s3";
    $passwd = "admin";
    $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
    
    $date=$_POST["date"];

    if(isset($_POST['date']))
    {
        $result = mysqli_query($co,"INSERT INTO livraison (nomTypeLivraison,limitePrix,rythmeLivraison,dateLivraison,dateCommande,nbPersonne) VALUES ('ponctuelle', 0, 0, $date,'', 1)") or die("Erreur d'insertion");
        /*A corriger*/
    }

    if ($result == false) {
        header('Location: ../vues/invalide.html');
    }
    else {
        header('Location: ../vues/valide.html');
    }
?>