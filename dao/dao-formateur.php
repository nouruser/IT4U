<?php

require_once "../model/formateur.php";

class DaoFormateur
{

    private $dbh;

    /**
     * DaoFormateur constructeur.
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
    public function addFormateur(Formateur $formateur)
    {
        $stm = $this->dbh->prepare("INSERT INTO formateur (nom,prenom,tel,email) VALUES (?, ?, ?, ?)");

        $stm->bindValue(1, $formateur->getNom());
        $stm->bindValue(2, $formateur->getPrenom());
        $stm->bindValue(3, $formateur->getTel());
        $stm->bindValue(4, $formateur->getEmail());

        if($stm->execute())
			return true;
		else
			return false;
    }

   
    public function findAllFormateurs(){
        $stmt = $this->dbh->prepare("select * from formateur order by idFormateur desc");

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
        echo "$result";
        
    }
    public function deleteFormateur($id){
            $stm = $this->dbh->prepare("DELETE FROM formateur WHERE idFormateur ='$id'");
            $stm->execute();
 
    }

    public function recupererFormateurs(){
        $stmt = $this->dbh->prepare("SELECT * FROM FORMATEUR ");
        $stmt->execute();
        return  $stmt;
    }

    public function updateFormateur($id,$nom,$prenom,$tel,$email){

            $stm = $this->dbh->prepare("UPDATE formateur SET nom=? ,prenom=?,tel=?,email=? WHERE idFormateur ='$id'");
           
            $stm->execute(array($nom,$prenom,$tel,$email));
           

    }

    public function sum_formateur()
		{
			$stmt = $this->dbh->prepare("SELECT * FROM formateur ");
			$stmt->execute();
			$n=0;
			while($st = $stmt->fetch(PDO::FETCH_ASSOC)){
				$n=$n+1;
			}
			return $n;
		}

}

