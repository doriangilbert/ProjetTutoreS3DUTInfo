
<?php
    require_once("../modeles/bd.php");
    require_once("../modeles/commande.php"); 

    $host = "localhost";
    $user = "admin";
    $bdd = "tutore_s3";
    $passwd = "admin";
    $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
    
    $date = $_POST["date"];
    $today = date("Y-m-d");
    $date = date('Y-m-d',strtotime($date));

    if(isset($_POST['date']))
    {
        $result=new Commande($co, $date, $today);

        //echo $result->get_numLivraison();
    }

    if ($result == false) {
        header('Location: ../vues/invalide.html');
    }
    else {
        header('Location: ../vues/valide.html');
    }
?>