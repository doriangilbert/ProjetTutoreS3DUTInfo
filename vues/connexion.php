<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>LegFruIUT - Connexion</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="ressources/css/connexion.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 min-vh-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">LegFruIUT</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="index.html">Accueil</a>
            <a class="nav-link" href="catalogue.php">Catalogue</a>
            <a class="nav-link active" href="connexion.php">Mon Compte</a>
          </nav>
        </div>
      </header>

      <main class="form-signin">
        
        <form method="post" action="../controleurs/connexion.php">
        <?php
            require_once("../modeles/bd.php");
            require_once("../modeles/membre.php");
            $host = "localhost";
            $user = "admin";
            $bdd = "tutore_s3";
            $passwd = "admin";
            if(isset($_SESSION["email"]) && isset($_SESSION["motDePasse"]))
            {
                $email = $_SESSION["email"];
                $motDePasse=$_SESSION["motDePasse"];
                $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
                $result=mysqli_query($co,"SELECT * FROM client WHERE email='$email' AND motDePasse='$motDePasse'");
                if(!(mysqli_num_rows($result)==0)) {
                    $membre=new Membre($co, $email, $motDePasse);
                    $membre->connexion();
                    
                    $row = mysqli_fetch_assoc($result);
                    $producteur = $row["producteur"];
                    $_SESSION['producteur'] = $row["producteur"];
                    $_SESSION['numClient'] = $row["numClient"];
                    /*$producteur=mysqli_fetch_assoc($result)["producteur"];
                    $_SESSION['numClient']=mysqli_fetch_assoc($result)["numClient"];*/
                    if($producteur==true) {
                        header('Location: ../vues/espace_producteur.html');
                    }
                    else {
                        header('Location: ../vues/espace_client.html');
                    }
                }
            }
        ?>
          <h1 class="h3 mb-3 fw-normal">Connectez vous</h1>
          <input type="email" id="inputEmail" class="form-control" placeholder="Adresse email" name="email" required autofocus>
          <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" name="motDePasse" required>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
          <a class="nav-link" href="inscription.html">Créer un compte</a>
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
