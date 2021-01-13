
<?php
require_once("../modeles/bd.php");
require_once("../modeles/membre.php");

$host = "localhost";
$user = "admin";
$bdd = "tutore_s3";
$passwd = "admin";
$co=(new Connexion($host, $user, $bdd, $passwd))->connexion();

$date=$_POST["date"];
$rythme=$_POST["rythme"];
$nbPers=$_POST["nbPers"];
$limitePrix=$_POST["limitePrix"];

if(isset($_POST['date']) && isset($_POST['rythme']) && isset($_POST['nbPers']) && isset($_POST['limitePrix']))
{
    $result = mysqli_query($co,"INSERT INTO livraison (nomTypeLivraison,limitePrix,rythmeLivraison,dateLivraison,dateCommande,nbPersonne) VALUES ('reguliere', $limitePrix, $rythme, $date, '', $nbPers)") or die("Erreur d'insertion");
}

if ($result == false) {
    header('Location: ../vues/invalide.html');
}
else {
    header('Location: ../vues/valide.html');
}

?>