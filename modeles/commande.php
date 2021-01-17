<?php
    session_start();
    require_once("../modeles/bd.php");
    class Commande {
        private $co;
        private $numLivraison;
        private $nomTypeLivraison;
        private $limitePrix;
        private $rythmeLivraison;
        private $statut;
        private $dateLivraison;
        private $dateCommande;
        private $nbPersonne;

        function __construct() {
            $argv = func_get_args();
            switch( func_num_args() ) {
                case 6:
                    self::__construct1($argv[0], $argv[1], $argv[2], $argv[3], $argv[4], $argv[5]);
                    break;
                case 4:
                    self::__construct2($argv[0], $argv[1], $argv[2], $argv[3]);
                    break;
                case 3:
                    self::__construct3($argv[0], $argv[1], $argv[2]);
                    break;
                case 2:
                    self::__construct4($argv[0], $argv[1]);
                    break;
             }
        }
    
        function __construct1($co, $limitePrix, $rythmeLivraison, $dateLivraison, $dateCommande, $nbPersonne) {
            $this->co=$co;
            $this->limitePrix=$limitePrix;
            $this->rythmeLivraison=$rythmeLivraison;
            $this->dateLivraison=$dateLivraison;
            $this->dateCommande=$dateCommande;
            $this->nbPersonne=$nbPersonne;
            mysqli_query($co,"INSERT INTO livraison (nomTypeLivraison, limitePrix, rythmeLivraison, dateLivraison, dateCommande, nbPersonne) VALUES ('reguliere', '$limitePrix', '$rythmeLivraison', '$dateLivraison' , '$dateCommande' , '$nbPersonne')") or die;
            $this->numLivraison = mysqli_insert_id($co);
        }
    
        function __construct2($co, $dateLivraison, $dateCommande, $nbPersonne) {
            $this->co=$co;
            $this->dateLivraison=$dateLivraison;
            $this->dateCommande=$dateCommande;
            $this->nbPersonne=$nbPersonne;
            mysqli_query($co,"INSERT INTO livraison (nomTypeLivraison, limitePrix, rythmeLivraison, dateLivraison, dateCommande, nbPersonne) VALUES ('groupee', 0, 0, '$dateLivraison' , '$dateCommande' , '$nbPersonne')");
            $this->numLivraison = mysqli_insert_id($co);
        }

        function __construct3($co, $dateLivraison, $dateCommande) {
            $this->co=$co;
            $this->dateLivraison=$dateLivraison;
            $this->dateLivraison=$dateLivraison;
            mysqli_query($co,"INSERT INTO livraison (nomTypeLivraison, limitePrix, rythmeLivraison, dateLivraison, dateCommande, nbPersonne) VALUES ('ponctuelle', 0, 0, '$dateLivraison' , '$dateCommande' , 1)");
            $this->numLivraison = mysqli_insert_id($co);
        }

        function __construct4($co, $numLivraison) {
            $this->co=$co;
            $this->dateLivraison=$numLivraison;
        }

        public function suppression_commande() {
            $result=mysqli_query($this->co,"DELETE FROM livraison WHERE numLivraison='$this->numLivraison'")or die("Erreur");
            $result=mysqli_query($this->co,"DELETE FROM passe WHERE numLivraison='$this->numLivraison'")or die("Erreur");
            $result=mysqli_query($this->co,"DELETE FROM contient WHERE numLivraison='$this->numLivraison'")or die("Erreur");
        }

        public function modif_commande($numProduit,$quantite,$dateLivraison) {
            if($quantite >= 1)
            {
                mysqli_query($this->co,"UPDATE livraison NATURAL JOIN contient NATURAL JOIN produit SET dateLivraison='$dateLivraison', quantite='$quantite' WHERE numLivraison='$this->numLivraison' AND numProduit ='$numProduit'")or die("erreur");
            }
            else {
                mysqli_query($this->co,"DELETE FROM livraison NATURAL JOIN contient WHERE numLivraison='$this->numLivraison' AND numProduit ='$numProduit'")or die("Erreur");
            }
        }

        public function afficher_contenu() {
            mysqli_query($this->co,"SELECT nomFruitLeg, famille, quantite, prix FROM livraison NATURAL JOIN contient NATURAL JOIN produit WHERE numLivraison='$this->numLivraison'");           
        }

        public function update_statut($statut) {
            mysqli_query($this->co,"UPDATE livraison SET statut='$statut' WHERE numLivraison='$this->numLivraison'");           
        }

        public function supprimer_article($nomFruitLeg) {
            mysqli_query($this->co,"DELETE FROM livraison NATURAL JOIN contient NATURAL JOIN produit WHERE nomFruitLeg='$nomFruitLeg' AND numLivraison='$this->numLivraison'");           
        }

        public function get_numLivraison() {
            return $this->numLivraison;
        }
    }
?>