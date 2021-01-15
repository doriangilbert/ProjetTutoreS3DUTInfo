<?php
    require_once("../modeles/bd.php");
    class Commande {
        private $co;
        private $numLivraison;
        private $nomTypeLivraison;
        private $limitePrix;
        private $rythmeLivraison;
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
        }
    
        function __construct2($co, $dateLivraison, $dateCommande, $nbPersonne) {
            $this->co=$co;
            $this->dateLivraison=$dateLivraison;
            $this->dateCommande=$dateCommande;
            $this->nbPersonne=$nbPersonne;
            mysqli_query($co,"INSERT INTO livraison (nomTypeLivraison, limitePrix, rythmeLivraison, dateLivraison, dateCommande, nbPersonne) VALUES ('groupee', 0, 0, '$dateLivraison' , '$dateCommande' , '$nbPersonne')");
        }

        function __construct3($co, $dateLivraison, $dateCommande) {
            $this->co=$co;
            $this->dateLivraison=$dateLivraison;
            $this->dateLivraison=$dateLivraison;
            mysqli_query($co,"INSERT INTO livraison (nomTypeLivraison, limitePrix, rythmeLivraison, dateLivraison, dateCommande, nbPersonne) VALUES ('ponctuelle', 0, 0, '$dateLivraison' , '$dateCommande' , 1)");
        }

        public function suppression() {
            $result=mysqli_query($this->co,"DELETE FROM livraison WHERE numLivraison='$this->numLivraison'")or die("Erreur");
            $result=mysqli_query($this->co,"DELETE FROM passe WHERE numLivraison='$this->numLivraison'")or die("Erreur");
            $result=mysqli_query($this->co,"DELETE FROM contient WHERE numLivraison='$this->numLivraison'")or die("Erreur");
        }
    }
?>