<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>LegFruIUT - Commandes</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="ressources/css/prod.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">LegFruIUT</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="index.html">Accueil</a>
            <a class="nav-link" href="catalogue.php">Catalogue</a>
            <a class="nav-link" href="connexion.html">Mon Compte</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Gestion des commandes</h1>
        <?php
          session_start();
          require_once("../modeles/bd.php");
          $host = "localhost";
          $user = "admin";
          $bdd = "tutore_s3";
          $passwd = "admin";
          $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
          $email=$_SESSION["email"];
          if(!isset($_SESSION["email"]))
          {
            header('Location: ../vues/index.html');
          }
          $motDePasse=$_SESSION["motDePasse"];

          ?>

          <form method="post" action="../controleurs/suppr_commande.php">
            <?php
            $result=mysqli_query($co,"SELECT numLivraison,nomTypeLivraison,limitePrix,rythmeLivraison,dateLivraison,dateCommande,nbPersonne FROM livraison NATURAL JOIN passe NATURAL JOIN client WHERE email='$email' AND motDePasse='$motDePasse' ORDER BY numLivraison");
            $var=1;
            if(false!==$result)
            {
                if(mysqli_num_rows($result)>0)
                {
                    echo "<table>";
                    $row = mysqli_fetch_assoc($result);
                    echo "<tr><th>", implode("</th><th>", array_keys($row)), "</th><th>Commande à supprimer</th></tr>";
                    do
                    {
                        echo "<tr><td>", implode("</td><td>", $row), "</td><td><input type='button' value='Supprimer' name='$row['numLivraison']'></td></tr>";
                    }
                    while($row = mysqli_fetch_row($result));
                    echo "</table>";
                }
                mysqli_free_result($result);    
            }
            
            ?>
          </form>
        ?>

      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Site réalisé par Dorian GILBERT et Matteo SERRANO</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>