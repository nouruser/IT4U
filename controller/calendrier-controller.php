<?php
	require '../dao/dao-calendrier.php';
	
	$db = new DaoCalendrier();
	if(isset($_GET["action"])){
		switch ($_GET["action"]) {
			case 'planification':
                $nomFormation = $_POST['nomFormation'];
                $nomFormateur = $_POST['nomFormateur'];
                $heure = $_POST['heure'];
                $lieu=$_POST['lieu'];
                $dateFormation = $_POST['dateFormation'];
                if (isset($nomFormation,$nomFormateur , $heure, $lieu, $dateFormation)) {
				$calendrier= new Calendrier(0,$nomFormation,$nomFormateur , $heure, $lieu, $dateFormation);
				$db->add_calendrier($calendrier);
                header('location: ../page/calendrier.php');
       
                }
            
				break;

            
            }
                   
	}
