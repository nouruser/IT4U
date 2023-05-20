<?php

require_once "../model/formation.php";

class DaoFormation
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
    public function addFormation(Formation $formation)
    {
        $stm = $this->dbh->prepare("INSERT INTO formation (nomFormation, prix, description, nbSession) VALUES (?, ?, ?, ?)");//le mon de la base de donnée est formation

        $stm->bindValue(1, $formation->getNomFormation());
        $stm->bindValue(2, $formation->getPrix());
        $stm->bindValue(3, $formation->getDescription());
        $stm->bindValue(4, $formation->getNbSession());

        $stm->execute();
    }

   
    public function findAllFormations(){
        $stmt = $this->dbh->prepare("select * from formation order by idFormation desc");

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
        echo "$result";
        
    }
    public function deleteFormation($id){
            $stm = $this->dbh->prepare("DELETE FROM formation WHERE idFormation ='$id'");
            $stm->execute();
 
    }

    public function updateFormation($id,$nomForm,$nbSess,$prix1,$descrip){

            $stm = $this->dbh->prepare("UPDATE formation SET nomFormation=? ,prix=?,description=?,nbSession=? WHERE idFormation ='$id'");
           
            $stm->execute(array($nomForm,$prix1,$descrip,$nbSess));
           

    }

    public function sum_formation()
		{
			$stmt = $this->dbh->prepare("SELECT * FROM formation ");
			$stmt->execute();
			$n=0;
			while($st = $stmt->fetch(PDO::FETCH_ASSOC)){
				$n=$n+1;
			}
			return $n;
		}

    

}

