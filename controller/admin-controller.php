<?php
	require_once '../dao/dao-admin.php';
	
	$db = new DaoAdmin();
	if(isset($_GET["action"])){
		switch ($_GET["action"]) {
			case 'loginAdmin':
				$email=$_POST['email'];
        		$password=$_POST['password'];
        		if(isset($email,$password)){
            		$admin = $db->findUser($email,$password);
            		if($admin != null){
                	session_start();
                	$_SESSION['admin'] = $admin;
                	//basculer vers la page bienvenue
                	header('location: ../page/dashboard.php');
            		}
					else{
						header('location: ../page/admin/AuthentificationAdminErreur.php');
						
					}
				}
            	else{
                	echo "echec de connexion!";
            	}
        		break;

			case 'logout':
				session_start();
        		session_destroy();
				$db->set_connecte($_SESSION['admin']->getEmail(),"logout");
				header('location: ../page/admin/AuthentificationAdmin.php');
				break;
		}
	}
