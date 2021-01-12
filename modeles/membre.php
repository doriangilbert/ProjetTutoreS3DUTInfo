<?php
    session_start();
    require_once("../modeles/bd.php");
    class Membre {
        private $co;
        private $numClient;
        private $nom;
        private $prenom;
        private $adresse;
        private $email;
        private $motDePasse;

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
    
        function __construct1($co, $nom, $prenom, $adresse, $email, $motDePasse) {
            $this->co=$co;
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->adresse=$adresse;
            $this->email=$email;
            $this->motDePasse=$motDePasse;
            mysqli_query($co,"INSERT INTO client (nom,prenom,adresse,email,motDePasse) VALUES ('$nom','$prenom','$adresse','$email','$motDePasse')")or die("erreur");
        }
    
        function __construct2($co, $email, $motDePasse) {
            $this->co=$co;
            $this->email=$email;
            $this->motDePasse=$motDePasse;
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

        public function connexion() {
            $_SESSION["co"]=$this->co;
            $_SESSION["email"]=$this->email;
            $_SESSION["motDePasse"]=$this->motDePasse;
        }
        public function modif_mdpasse($motDePasse) {
            $result=mysqli_query($this->co,"UPDATE client SET motDePasse='$motDePasse' WHERE id='$this->id'")or die("erreur");
        }
        public function deconnexion() {
            session_destroy();
            mysqli_close($this->co);
        }
    }
?>