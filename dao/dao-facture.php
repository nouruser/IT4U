<?php

require_once "../model/facture.php";

class DaoFacture
{

    private $dbh;

    /**
     * DaoFormation constructeur.
     */
    public function __construct()
    {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=gformation', "root", "");
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function findAllFactures(){
        $stmt = $this->dbh->prepare("select * from facture order by idFormation");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
        
    }
    public function findPrenom($mail){
        $stmt = $this->dbh->prepare("select prenom from utilisateur where utilisateur.email='$mail'");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);;
        return $result;
        
    }
    public function findNom($mail){
        $stmt = $this->dbh->prepare("select nom from utilisateur where utilisateur.email='$mail'");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);;
        return $result;
    }
    public function findFormation($id){
        $stmt = $this->dbh->prepare("select nomFormation from formation where formation.idFormation='$id'");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);;
        return $result;
    }
    public function findSessions($id){
        $stmt = $this->dbh->prepare("select nbSession from formation where formation.idFormation='$id'");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);;
        return $result;
    }
    public function paiement($id, $mail, $paye){
            $stm = $this->dbh->prepare("UPDATE facture SET paiement='$paye' WHERE idFormation ='$id'AND email ='$mail'");
            $stm->execute();
 
    }
    public function addFacture(FACTURE $facture){
        $stm = $this->dbh->prepare("INSERT INTO facture (email, idFormation, paiement) VALUES (?, ?, ?)");
        $stm->bindValue(1, $facture->getEmail());
        $stm->bindValue(2, $facture->getIdFormation());
        $stm->bindValue(3, $facture->getPaiement());
        
        $stm->execute();
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

