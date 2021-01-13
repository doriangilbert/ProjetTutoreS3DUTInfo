<?php
    require_once("../modeles/bd.php");
    class Produit {
        private $co;
        private $numProduit;
        private $nomFruitLeg;
        private $famille;
        private $quantite;
        private $prix;
        private $promotion;

        function __construct() {
            $argv = func_get_args();
            switch( func_num_args() ) {
                case 6:
                    self::__construct1($argv[0], $argv[1], $argv[2], $argv[3], $argv[4], $argv[5]);
                    break;
                case 3:
                    self::__construct2($argv[0], $argv[1], $argv[2]);
                    break;
             }
        }
    
        function __construct1($co, $nomFruitLeg, $famille, $quantite, $prix, $promotion) {
            $this->co=$co;
            $this->nomFruitLeg=$nomFruitLeg;
            $this->famille=$famille;
            $this->quantite=$quantite;
            $this->prix=$prix;
            $this->promotion=$promotion;
            mysqli_query($co,"INSERT INTO produit (nomFruitLeg, famille, quantite, prix, promotion) VALUES ('$nomFruitLeg', '$famille', '$quantite', '$prix', '$promotion')")or die("erreur");
        }
    
        function __construct2($co, $nomFruitLeg, $famille) {
            $this->co=$co;
            $this->nomFruitLeg=$nomFruitLeg;
            $this->famille=$famille;
        }

        /*function __construct($co, $pseudo, $mdpasse, $email) {
            $this->co=$co;
            $this->pseudo=$pseudo;
            $this->mdpasse=$mdpasse;
            $this->email=$email;
            $result=mysqli_query($co,"INSERT INTO membres (pseudo, mdpasse, email) VALUES ('$pseudo','$mdpasse','$email')")or die("erreur");
        }
        function __construct($co, $pseudo, $mdpasse) {
            $this->co=$co;
            $this->pseudo=$pseudo;
            $this->mdpasse=$mdpasse;
        }*/
        public function suppression() {
            $result=mysqli_query($this->co,"DELETE FROM produit WHERE nomFruitLeg='$this->nomFruitLeg' AND famille='$this->famille'")or die("erreur");
        }
    }
?>