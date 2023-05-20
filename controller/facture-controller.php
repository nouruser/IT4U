<?php

	require '../dao/dao-facture.php';

$action = $_GET['action'];
$dao = new DaoFacture();

switch ($action) {
    case 'paiement':
      $id = $_POST['idFact'];
      $mail = $_POST['mailFact'];
      $paiement = $_POST['paiement'];
      $dao->paiement($id, $mail,$paiement);
      header('location: ../page/facture.php');
      break;

      case 'insertFacture':
        $idFormation = $_POST['idformation'];
        $email = $_POST['email'];
        if (isset($email, $idFormation)) {
          $facture = new FACTURE($email, $idFormation, 'non');
          $dao->addFacture($facture);
          header('location: ../page/espaceClient.php');
			    header("refresh");
        }
        break;
      
}
          
