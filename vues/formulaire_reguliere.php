<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>LegFruIUT - Livraison régulière</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="ressources/css/formulaire.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 min-vh-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">LegFruIUT</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="index.html">Accueil</a>
            <a class="nav-link" href="catalogue.php">Catalogue</a>
            <a class="nav-link" href="espace_client.html">Mon Compte</a>
          </nav>
        </div>
      </header>

      <main class="form-signin">
        <form method="post" action="../controleurs/formulaire_reguliere.php">
          <h1 class="h3 mb-3 fw-normal">Livraison régulière de paniers de légumes</h1>
          <p>Si vous êtes un grand fan de fruits et de légumes alors vous avez la possibilité de demander la livraison régulière de paniers de légumes surprises composés au gré des saisons.</p>  
          <input type="number" id="inputNbPers" class="form-control" placeholder="Nombre de personnes" name="nbPers" required autofocus>
          <select id="inputRythmeLivr" class="form-control" placeholder="Rythme de livraison" name="rythme">
            <option value="1">Toutes les semaines</option>
            <option value="2">2 fois par semaine</option>
            <option value="0.5">1 semaine sur 2</option>
            <option value="0.33">1 semaine sur 3</option>
            <option value="0.25">Tous les mois</option>
          </select>

          <?php
          $today = date("Y-m-d");
          $future = date('Y-m-d',strtotime(date("Y-m-d", mktime()) . " + 365 day"));
          ?>

          <input type="date" id="inputDate" class="form-control" name="date" value=<?php echo $today ?> min=<?php echo $today ?> max=<?php echo $future ?> required>
          <input type="number" id="inputLimPrix" class="form-control" placeholder="Limite de prix" name="limitePrix" required>
          <br>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Valider ma commande</button>
        </form>
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
