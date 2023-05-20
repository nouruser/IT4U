<?php
	require '../dao/dao-utilisateur.php';
	
	$db = new DaoUtilisateur();
	if(isset($_GET["action"])){
		switch ($_GET["action"]) {
			case 'inscription':
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $tel = $_POST['tel'];
                $email=$_POST['email'];
                $password = $_POST['password'];
                $password1 = $_POST['password1'];

				$user = new Utilisateur($nom,$prenom ,$tel,$email,$password,$password1,getDate());
				$check_error = $db->add_user($user);
				
				if($check_error){
					header('location: ../page/client/Authentification.php');
				}else{
					header('location: ../page/client/Inscription.php?result=1');
				}

				break;

			case 'login':
				$email=$_POST['email'];
        		$password=$_POST['password'];
        		if(isset($email,$password)){
            		$utilisateur = $db->findUser($email,$password);
            		if($utilisateur != null){
                	session_start();
                	$_SESSION['utilisateur'] = $utilisateur;
                	//basculer vers la page bienvenue
                	header('location: ../page/espaceClient.php');
            		}
					else{
						header('location: ../page/client/AuthentificationErreur.php');
						
					}
				}
            	else{
                	echo "echec de connexion!";
            	}
        		break;

			case 'edit':
				session_start();
				$nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $tel = $_POST['tel'];
            	$utilisateur = $db->edit_user($nom,$prenom ,$tel,$_SESSION['utilisateur']->getEmail(),$_SESSION['utilisateur']->getPassword());
				$_SESSION['utilisateur']->setNom($nom);
				$_SESSION['utilisateur']->setPrenom($prenom);
				$_SESSION['utilisateur']->setTel($tel);
				if($utilisateur != null)				
					header('location: ../page/client/infoClient.php');
					header("refresh");
				break;

			case 'logout':
				session_start();
        		session_destroy();
				$db->set_connecte($_SESSION['utilisateur']->getEmail(),"logout");
				header('location: ../page/client/Authentification.php');
				break;
			case 'add':

					$nom = $_POST['nom'];
					$prenom = $_POST['prenom'];
					$tel = $_POST['tel'];
					$email=$_POST['email'];
					$password = $_POST['password'];
					$password1 = $_POST['password1'];
					$date= $_POST['date'];
					$user = new Utilisateur($nom,$prenom ,$tel,$email,$password,$password1,$date);
					$check_error = $db->add_user($user);
					
					if(!$check_error){
						header('location: ../page/clienta.php?result=0');
					}else{
						header('location: ../page/clienta.php?result=1');
					}
	
					break;
			case 'delete':
						$email=$_POST['koko'];
						$db->delete_user($email);
						header('location: ../page/clienta.php');
			break;
			case 'update':
					$nom = $_POST['nom'];
					$prenom = $_POST['prenom'];
					$tel = $_POST['tel'];
					$email=$_POST['email'];
					$password = $_POST['password'];
					$password1 = $_POST['password1'];
					$date = $_POST['date'];
					$user = new Utilisateur($nom,$prenom,$tel,$email,$password,$password1,$date);
					$email1=$_POST['toto'];
					$db->update_user($user,$email1);
					header('location: ../page/clienta.php');
			break;
		}
	}
