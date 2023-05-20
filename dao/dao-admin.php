<?php
	
	require_once '../model/admin.php';

	class DaoAdmin
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

		private function check_user($email)
		{
			$stmt = $this->dbh->prepare("SELECT * FROM admin WHERE email=?");
			$stmt->bindParam(1,$email);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);

			if($result){
				return false;
			}else{
				return true;
			}
		}
		

		public function findUser($email, $password){
			$admin=null;
			$stm = $this->dbh->prepare("SELECT * FROM admin WHERE email = ? AND password= ? ");
			$stm->bindValue(1,$email);
			$stm->bindValue(2,$password);
			$stm->execute();
			$resultat = $stm->fetch(PDO::FETCH_ASSOC);        
			if(!empty($resultat)){
				$admin = new admin($resultat['nom'],$resultat['prenom'],$resultat['email'],$resultat['password']);
			}
			return $admin; 
		}

	}

	