<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>LegFruIUT - Stocks</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="ressources/css/prod.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 min-vh-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">LegFruIUT</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="index.html">Accueil</a>
            <a class="nav-link" href="catalogue.php">Catalogue</a>
            <a class="nav-link" href="espace_producteur.html">Mon Compte</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Gestion des stocks</h1>
        <?php
          require_once("../modeles/bd.php");
          $host = "localhost";
          $user = "admin";
          $bdd = "tutore_s3";
          $passwd = "admin";
          $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
          $result=mysqli_query($co,"SELECT * FROM produit ORDER BY numProduit, famille");

          echo "<table>";
          echo "<tr><th>Image</th><th>Numéro Produit</th><th>Nom Fruit Légume</th><th>Famille</th><th>Quantité</th><th>Prix</th><th>Promotion</th></tr>";

          while($row = mysqli_fetch_array($result)) {
                $lienImage = $row['lienImage'];
                $numProduit = $row['numProduit'];
                $nomFruitLeg = $row['nomFruitLeg'];
                $famille = $row['famille'];
                $quantite = $row['quantite'];
                $prix = $row['prix'];
                $promotion = $row['promotion'];
                echo "<tr><td>"."<img src=$lienImage>"."</td><td>".$numProduit."</td><td>".$nomFruitLeg."</td><td>".$famille."</td><td>".$quantite."</td><td>".$prix."</td><td>".$promotion."</td></tr>";
            } 

            echo "</table>";

        ?>
        <a href="modif_stocks.html" class = "btn btn-lg btn-secondary" role="button" style="margin-top: 1rem">Modifier le stock</a>
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
