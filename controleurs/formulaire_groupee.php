
<?php
require_once("../modeles/bd.php");
require_once("../modeles/membre.php");

$host = "localhost";
$user = "admin";
$bdd = "tutore_s3";
$passwd = "admin";
$co=(new Connexion($host, $user, $bdd, $passwd))->connexion();

$date=$_POST["date"];
$nbPers=$_POST["nbPers"];

if(isset($_POST['date']) && isset($_POST['nbPers']))
{
    $result = mysqli_query($co,"INSERT INTO livraison (nomTypeLivraison,limitePrix,rythmeLivraison,dateLivraison,dateCommande,nbPersonne) VALUES ('groupee', 0, '', $date, '' , $nbPers)") or die("Erreur d'insertion");
}

if ($result == false) {
    header('Location: ../vues/invalide.html');
}
else {
    header('Location: ../vues/valide.html');
}
?>