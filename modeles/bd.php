<?php
    class Connexion {
        private $host;
        private $user;
        private $bdd;
        private $passwd;

        function __construct($host, $user, $bdd, $passwd) {
            $this->host=$host;
            $this->user=$user;
            $this->bdd=$bdd;
            $this->passwd=$passwd;
        }

        public function connexion() {
            $result=mysqli_connect($this->host , $this->user , $this->passwd, $this->bdd) or die("erreur de connexion");
            return $result;
        }
    }
    /* $host = "localhost"; // ou 127.0.0.1
    $user = "admin";
    $bdd = "espace_membres"; // le nom de votre base de données
    $passwd = "admin";
    $co = mysqli_connect($host , $user , $passwd, $bdd) or
    die("erreur de connexion"); */
?>