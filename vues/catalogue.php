<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>LegFruIUT - Catalogue</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

  <!-- Bootstrap core CSS -->
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="ressources/css/prod.css" rel="stylesheet">
</head>

<body class="text-center">

  <div class="cover-container d-flex h-100 min-vh-100 p-3 mx-auto flex-column">
    <header class="masthead">
      <div class="inner">
        <h3 class="masthead-brand">LegFruIUT</h3>
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link" href="index.html">Accueil</a>
          <a class="nav-link active" href="catalogue.php">Catalogue</a>
          <a class="nav-link" href="espace_client.html">Mon Compte</a> <!--Si producteur clique sur catalogue puis mon compte : Bug-->
        </nav>
      </div>
    </header>

    <?php
      session_start();

      if(!isset($_SESSION["email"]) && !isset($_SESSION["motDePasse"]))
      {
        header('Location: ../vues/connexion.php'); 
      }

    ?>

    <main role="main" class="inner cover">

      <h1 class="cover-heading">Catalogue</h1>
      
      <!-- <form method="post" action="../controleurs/catalogue.php">
          <div class="container my-container">

            <div class="row my-row">

              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
            </div>
            
            <div class="row my-row">
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
            </div>
              
              <div class="row my-row">
                <div class="col my-col">
                  <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                  1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                    max="100">
                </div>
                <div class="col my-col">
                  <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                  1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                    max="100">
                </div>
                <div class="col my-col">
                  <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                  1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                    max="100">
                </div>
                <div class="col my-col">
                  <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                  1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                    max="100">
                </div>
                <div class="col my-col">
                  <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                  1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                    max="100">
                </div>
                <div class="col my-col">
                  <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                  1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                    max="100">
                </div>
                <div class="col my-col">
                  <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                  1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                    max="100">
                </div>
                <div class="col my-col">
                  <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                  1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                    max="100">
                </div>
              </div>

            <div class="row my-row">
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
            </div>

            <div class="row my-row">
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
            </div>

            <div class="row my-row">
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
            </div>

            <div class="row my-row">
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
              <div class="col my-col">
                <img src="ressources/images/mockup-graphics-Nvc_xOMiZoE-unsplash.jpg" style="width:auto; max-width:100%; height:auto;">Item
                1<input type="number" id="inputNb" class="form-control" placeholder="Nombre" step="1" value="0" min="0"
                  max="100">
              </div>
            </div>
              
          </div>

              <div class="container">
                <div class="row">
                  <div class="col text-center">
                    <button class="btn btn-lg btn-secondary" style="margin-top: 3rem;" type="submit">Valider mon panier</button>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col text-center"> 
                    <p style="font-size: 3rem;">Ou</p>
                    <a href="formulaire_reguliere.php" class = "btn btn-lg btn-secondary" role="button">Demander un panier de légumes surprise composé au gré des saisons</a>
                  </div>
                </div>
              </div>
              
      </form> -->
      <form method="post" action="../controleurs/catalogue.php">
        <?php
            require_once("../modeles/bd.php");
            $host = "localhost";
            $user = "admin";
            $bdd = "tutore_s3";
            $passwd = "admin";
            $co=(new Connexion($host, $user, $bdd, $passwd))->connexion();
            $result=mysqli_query($co,"SELECT * FROM produit ORDER BY numProduit");

            echo "<table>";
            echo "<tr><th>Image</th><th>Numéro Produit</th><th>Nom Fruit Légume</th><th>Famille</th><th>Quantité</th><th>Prix</th><th>Promotion</th><th>Quantité désirée</th></tr>";

            while($row = mysqli_fetch_array($result)) {
                $lienImage = $row['lienImage'];
                $numProduit = $row['numProduit'];
                $nomFruitLeg = $row['nomFruitLeg'];
                $famille = $row['famille'];
                $quantite = $row['quantite'];
                $prix = $row['prix'];
                $promotion = $row['promotion'];
                echo "<tr><td>"."<img src=$lienImage>"."</td><td>".$numProduit."</td><td>".$nomFruitLeg."</td><td>".$famille."</td><td>".$quantite."</td><td>".$prix."</td><td>".$promotion."</td><td><input type='number' id='inputNb' name='$numProduit' class='form-control' placeholder='Nombre' step='1' value='0' min='0'
                max='$quantite'></td></tr>";
            } 

            echo "</table>";

            /*if(false!==$result)
            {
                if(mysqli_num_rows($result)>0)
                {
                    echo "<table>";
                    $row = mysqli_fetch_assoc($result);
                    echo "<tr><th>Image</th><th>", implode("</th><th>", array_keys($row)), "</th><th>Quantité désirée</th></tr>";
                    $rowNum=1;
                    do
                    {
                        if($rowNum==1){
                          $numProduit=$row["numProduit"];
                          $quantiteMax=$row["quantite"];
                        }
                        if($rowNum>1){
                          $numProduit=$row[0];
                          $quantiteMax=$row[3];
                        }
                        echo "<tr><td style='width: 2rem; height : 2rem'>"."<img src=$lienImage>"."</td><td>", implode("</td><td>", $row), "</td><td><input type='number' id='inputNb' name='$numProduit' class='form-control' placeholder='Nombre' step='1' value='0' min='0'
                        max='$quantiteMax'></td></tr>";
                        $rowNum++;
                    }
                    while($row = mysqli_fetch_row($result));
                    echo "</table>";
                }
                mysqli_free_result($result);    
            }*/
          ?>
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <button class="btn btn-lg btn-secondary" style="margin-top: 3rem;" type="submit">Valider mon panier</button>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col text-center"> 
                <p style="font-size: 3rem;">Ou</p>
                <a href="formulaire_reguliere.php" class = "btn btn-lg btn-secondary" role="button">Demander un panier de légumes surprise composé au gré des saisons</a>
              </div>
            </div>
          </div>
      </form>
    </main>
    
    <br>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Site réalisé par Dorian GILBERT et Matteo SERRANO</p>
      </div>
    </footer>
  </div>


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
</body>

</html>