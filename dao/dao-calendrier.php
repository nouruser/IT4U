<?php
	
	require_once '../model/calendrier.php';

	class DaoCalendrier
	{
		private $dbh;
		public function __construct()
		{
			try {
			 $this->dbh = new PDO('mysql:host=localhost;dbname=gformation', "root", "");
			} catch (PDOException $e) {
			 print "Erreur !: " . $e->getMessage() . "<br/>";
			 die();
			}
		}

        public function add_calendrier(Calendrier $calendrier)
        {
            $stmt = $this->dbh->prepare("INSERT INTO calendrier (nomFormation,nomFormateur , heure, lieu,dateFormation) VALUES (?,?,?,?,?)");
            $stmt->bindParam(1,  $calendrier->getNomFormation());
            $stmt->bindParam(2,  $calendrier->getNomFormateur());
            $stmt->bindParam(3,  $calendrier->getHeure());
            $stmt->bindParam(4,  $calendrier->getLieu());
            $stmt->bindParam(5,  $calendrier->getDateFormation());
    
            $stmt->execute();
        }
        public function find_calendrier($date){
            $stmt = $this->dbh->prepare("select * from calendrier where dateFormation='$date'");
            
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
           
            
        }
       

		
	}

	