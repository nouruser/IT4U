<?php
	require '../dao/dao-formateur.php';
	$db = new DaoFormateur();
	if(isset($_GET["action"])){
		switch ($_GET["action"]) {

			case 'add':
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$tel = $_POST['tel'];
				$email=$_POST['email'];
				if (isset($nom,$prenom ,$tel,$email)) {
					$formateur = new Formateur(0,$nom,$prenom ,$tel,$email);
					$db->addFormateur($formateur);
					header('location: ../page/formateurs.php');
					header("refresh");
				}
				break;

			case 'delete':
				$id = $_POST['numFor'];
				$db->deleteFormateur($id);
				header('location: ../page/formateurs.php');   
				break;
					  
			case 'update':
				$id = $_POST['numFor2'];
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$tel = $_POST['tel'];
				$email=$_POST['email'];
				$db->updateFormateur($id,$nom,$prenom,$tel,$email);
				header('location: ../page/formateurs.php');
				break;
				
		}
	}
