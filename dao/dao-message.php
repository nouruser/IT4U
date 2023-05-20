<?php 
include "../model/message.php";

class DaoMessage
{
    private $dbh;
    public function __construct(){
        try{
            $this->dbh = new PDO('mysql:host=localhost;dbname=gformation',"root","");
        }
        catch(PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public function save(Message $message){
        $stm = $this->dbh->prepare("INSERT INTO message (contenu,emetteur) VALUES (?, ?)");
        //bindValue car les getters retournes les valeurs

        $stm->bindValue(1, $message->getContenu());
        $stm->bindValue(2, $message->getEmetteur());
        //insertion
        $stm->execute();
    }

    public function findAll(){
        $stm = $this->dbh->prepare("SELECT * FROM message ORDER BY date");  
        // Exécution de la requete
        $stm->execute();
        // récuperation des donnees 
        $resultat = $stm->fetchAll();   
        return $resultat; 
    }

    public function recupererMessages(){
        $stmt = $this->dbh->prepare("SELECT * FROM utilisateur JOIN MESSAGE ON utilisateur.email=message.emetteur ");
        $stmt->execute();
        return  $stmt;
    }
}

?>