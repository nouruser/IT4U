<?php


    class FORMATEUR
    {
        private $idFormateur ,$nom ,$prenom , $tel, $email; 

        public function __construct( $idFormateur ,$nom ,$prenom , $tel, $email)
        {
            $this->idFormateur = $idFormateur;
            $this->nom = $nom;
            $this->prenom= $prenom;
            $this->tel =$tel;
            $this->email = $email;
        }

        //id
        public function getIdFormateur()
        {
            return $this->idFormateur;
        }
        public function setIdFormateur($idFormateur)
        {
            $this->idFormateur = $idFormateur;
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

    }

