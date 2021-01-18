<?php
    session_start();
    require_once("../modeles/bd.php");
    $host = "localhost";
    $user = "admin";
    $bdd = "tutore_s3";
    $passwd = "admin";
    $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();

    $array = array();

    $result=mysqli_query($co,"SELECT * FROM produit ORDER BY numProduit");
    if(false!==$result)
    {
        if(mysqli_num_rows($result)>0)
        {
            $row = mysqli_fetch_assoc($result);
            $rowNum=1;
            do
            {
                if($rowNum==1){
                    $numProduit=$row["numProduit"];
                }
                if($rowNum>1){
                    $numProduit=$row[0];
                }
                $array[$numProduit] = $_POST[$numProduit];
                $rowNum++;
            }
            while($row = mysqli_fetch_row($result));
        }
        mysqli_free_result($result);    
    }

    $_SESSION["panier"] = $array;

    /* A faire au dernier formulaire après voir récupéré l'array
    foreach ($array as $key => $value) {
        echo $key.','.$value.'|';
        //INSERT INTO contient (numCommande,numProduit,quantite) VALUES (numCommande,$key,$value);
    }
    */

    header('Location: ../vues/livraison.html');
?>