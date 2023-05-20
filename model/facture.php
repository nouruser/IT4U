<?php


    class FACTURE
    {
        private $email, $idFormation ,$paiement; 

        public function __construct( $email, $idFormation ,$paiement)
        {
            $this->email = $email;
            $this->idFormation = $idFormation;
            $this->paiement= $paiement;
        }

        //id
        public function getIdFormation()
        {
            return $this->idFormation;
        }
    
        // Email

        public function getEmail()
        {
            return $this->email;
        }
        
        // paiement 
        public function getPaiement(){
            return $this->paiement;
        }
        public function setPaiement($paiement)
        {
            $this->paiement = $paiement;
        }

        public function sum_facture()
		{
			$stmt = $this->dbh->prepare("SELECT * FROM facture WHERE paiement='oui' ");
			$stmt->execute();
			$n=0;
			while($st = $stmt->fetch(PDO::FETCH_ASSOC)){
				$n=$n+1;
			}
			return $n;
		}

    }

