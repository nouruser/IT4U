<?php


    class Admin
    {
        private $nom ,$prenom , $email, $password ; 

        public function __construct( $nom ,$prenom , $email, $password)
        {
            $this->nom = $nom;
            $this->prenom= $prenom;
            $this->email = $email;
            $this->password = $password;
        }

        // Nom
        public function getNom()
        {
            return $this->nom;
        }
        public function setNom($nom)
        {
            $this->nom = $nom;
        }


        // Prénom
        public function getPrenom()
        {
            return $this->prenom;
        }
        public function setPrenom($prenom)
        {
            $this->prenom= $prenom;
        }

        // Email

        public function getEmail()
        {
            return $this->email;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }

        // Mot de passe
        public function getPassword()
        {
            return $this->password;
        }
        public function setPassword($password)
        {
            $this->password = $password;
        }

    }

