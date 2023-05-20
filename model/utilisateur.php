<?php


    class Utilisateur 
    {
        private $nom ,$prenom , $tel, $email, $password, $password1, $date ; 

        public function __construct( $nom ,$prenom , $tel, $email, $password, $password1, $date )
        {
            $this->nom = $nom;
            $this->prenom= $prenom;
            $this->tel =$tel;
            $this->email = $email;
            $this->password = $password;
            $this->password1 = $password1;
            $this->date = $date;
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

        // Telephone
        public function getTel()
        {
            return $this->tel;
        }
        public function setTel($tel)
        {
            $this->tel = $tel;
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

        // Comfirmer le mot de passe
        public function getPassword1()
        {
            return $this->password1;
        }
        public function setPassword1($password1)
        {
            $this->password1 = $password1 ;
        }

        //date
        public  function getDate() {
            return $this->date;
        }
        public function setDate($date) {
            $this->date = $date;
        }
      

    }

