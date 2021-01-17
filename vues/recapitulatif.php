<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>LegFruIUT - Espace client</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="ressources/css/livraison.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">LegFruIUT</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="index.html">Accueil</a>
            <a class="nav-link" href="catalogue.php">Catalogue</a>
            <a class="nav-link active" href="espace_client.html">Mon Compte</a>
          </nav>
        </div>
      </header>

      <main class="inner cover"> <!--Peut-être que faire un récapitulatif n'est pas nécessaire-->
        
        <div class="col-md-12 col-lg-12 order-md-last">

          <form method="post" action="../controleurs/recapitulatif.php">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="my-0">Votre commande</span>
            </h4>

            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Banane</h6>
                  <small class="text-muted">Qté : 2, Prix au kg : 1.20 €</small>
                </div>
                <span class="text-muted">6€</span>
              </li>

              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Orange</h6>
                  <small class="text-muted">Qté : 3, Prix au kg : 0.70 €</small>
                </div>
                <span class="text-muted">1.2€</span>
              </li>
            
              <span class="text-success">
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (Euros)</span>
                7.20€
              </li>
            </span>
            </ul>
        
            <!--<form class="card p-2">
                  <button class="btn btn-lg btn-secondary" style="margin-top: 3rem;" type="submit">Valider ma commande</button>
                </div>
              </div>
            </div>  -->

          <?php
          session_start();
          require_once("../modeles/bd.php");
          $host = "localhost";
          $user = "admin";
          $bdd = "tutore_s3";
          $passwd = "admin";
          $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
          $email=$_SESSION["email"];
          if(!isset($_SESSION["email"])) //A voir si on autorise les commandes si non connecté
          {
            header('Location: ../vues/index.html');
          }
          $motDePasse=$_SESSION["motDePasse"];

          ?>

          <!--Récupérer les articles du catalogue -->

          </form>

        </div>

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


