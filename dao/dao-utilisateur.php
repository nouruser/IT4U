<?php
	
	require_once '../model/utilisateur.php';

	class DaoUtilisateur
	{
		private $dbh;
		public $s;
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
			$stmt = $this->dbh->prepare("SELECT * FROM utilisateur WHERE email=?");
			$stmt->bindParam(1,$email);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);

			if($result){
				return false;
			}else{
				return true;
			}
		}
		
		public function add_user(Utilisateur $user){
			
			$nom= $user->getNom();
			$prenom = $user->getPrenom();
			$tel = $user->getTel();
			$email = $user->getEmail();
			$password = $user->getPassword();
			$password1 = $user->getPassword1();
			

			if(isset($nom,$prenom,$tel,$email,$password,$password1) && !empty($nom) && !empty($prenom) && !empty($tel) && !empty($email) && !empty($password) && !empty($password1)){

				if(!$this->check_user($email)){
					return false;
				}

				$stmt = $this->dbh->prepare("INSERT INTO UTILISATEUR (nom,prenom,tel,email,password,password1,date) VALUES (?,?,?,?,?,?,NOW())");
				$stmt->bindParam(1,$nom);
				$stmt->bindParam(2,$prenom);
				$stmt->bindParam(3,$tel);
				$stmt->bindParam(4,$email);
				$stmt->bindParam(5,$password);
				$stmt->bindParam(6,$password1);
				

				
				if($stmt->execute())
					return true;
				else
					return false;
				
			}else{
				return false;
			}
		}

		public function edit_user($nom,$prenom,$tel,$email,$password){
			if(isset($nom,$prenom,$tel) ){
				$stmt = $this->dbh->prepare("UPDATE utilisateur SET nom='$nom', prenom='$prenom', tel='$tel' WHERE email='$email' AND password='$password'");
				echo $nom;
				if($stmt->execute()){
					return new Utilisateur($nom,$prenom,$tel,$email,$password,$password,getDate());
				}
				else{
					return false;
				}
			}else{
				return false;
			}
		}

		public function findUser($email, $password){
			$utilisateur=null;
			$stm = $this->dbh->prepare("SELECT * FROM utilisateur WHERE email = ? AND password= ? ");
			$stm->bindValue(1,$email);
			$stm->bindValue(2,$password);
			$stm->execute();
			$resultat = $stm->fetch(PDO::FETCH_ASSOC);        
			if(!empty($resultat)){
				$utilisateur = new Utilisateur($resultat['nom'],$resultat['prenom'],$resultat['tel'],$resultat['email'],$resultat['password'],$resultat['password1'],$resultat['date']);
			}
			return $utilisateur; 
		}

		public function recuperer(){
			$stmt = $this->dbh->prepare("SELECT * FROM UTILISATEUR JOIN FACTURE ON utilisateur.email=facture.email WHERE facture.paiement='oui'");
			$stmt->execute();
			return  $stmt;
		}

		public function sum_user()
		{
			$stmt = $this->dbh->prepare("SELECT * FROM UTILISATEUR ");
			$stmt->execute();
			$n=0;
			while($st = $stmt->fetch(PDO::FETCH_ASSOC)){
				$n=$n+1;
			}
			return $n;
		}

		public function delete_user($email){	
			$stmt = $this->dbh->prepare("DELETE FROM utilisateur WHERE email='$email'");
			$stmt->execute();
		}

	public function update_user(Utilisateur $user,$toto){
		
		$nom= $user->getNom();
		$prenom = $user->getPrenom();
		$tel = $user->getTel();
		$email = $user->getEmail();
		$password = $user->getPassword();
		$password1 = $user->getPassword1();
		$date = $user->getDate();
		$stmt = $this->dbh->prepare("UPDATE utilisateur SET nom='$nom', prenom='$prenom', tel='$tel' , email='$email', password='$password',password1='$password1',date='$date' WHERE email='$toto'");
		$stmt->execute();
		return $stmt;
	}

	public function recupererFormations(){
        $stmt = $this->dbh->prepare("SELECT * FROM utilisateur JOIN FACTURE JOIN FORMATION ON utilisateur.email=facture.email and formation.idFormation=facture.idFormation Where facture.paiement='oui' ");
        $stmt->execute();
        return  $stmt;
    }

	}

	