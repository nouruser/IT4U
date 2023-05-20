<?php


    class Calendrier
    {
        private $idCalendrier ,$nomFormation,$nomFormateur,  $heure, $lieu,$dateFormation; 

        public function __construct( $idCalendrier,$nomFormation,$nomFormateur , $heure, $lieu, $dateFormation)
        {
            $this->idCalendrier = $idCalendrier;
            $this->nomFormation =$nomFormation;
            $this->nomFormateur = $nomFormateur;
            $this->heure =$heure;
            $this->lieu = $lieu;
            $this->dateFormation = $dateFormation;
          
        }

        // idCalendrier
        public function getIdCalendrier()
        {
            return $this->idCalendrier;
        }
        public function setIdCalendier($idCalendrier)
        {
            $this->idCalendrier = $idCalendrier;
        }

        // nomFormation
        public function getNomFormation()
        {
            return $this->nomFormation;
        }
        public function setNomFormation($nomFormation)
        {
            $this->nomFormation = $nomFormation;
        }

        // nomFormateur

        public function getNomFormateur()
        {
            return $this->nomFormateur;
        }
        public function setNomFormateur($nomFormateur)
        {
            $this->nomFormateur = $nomFormateur;
        }

        // heure
        public function getHeure()
        {
            return $this->heure;
        }
        public function setHeure($heure)
        {
            $this->heure = $heure;
        }

        // lieu

        public function getLieu()
        {
            return $this->lieu;
        }
        public function setLieu($lieu)
        {
            $this->lieu = $lieu;
        }

        // DateFormation

        public function getDateFormation()
        {
            return $this->dateFormation;
        }
        public function setDateFormation($dateFormation)
        {
            $this->dateFormation = $dateFormation;
        }

      

    }

