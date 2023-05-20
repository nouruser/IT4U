<?php 
include "../dao/dao-message.php";
include "../model/utilisateur.php";
session_start();

$action = $_GET['action'];
$dao = new DaoMessage();
echo $action;
switch($action){
    case 'messages':
        $result = $dao->findAll();
        foreach($result as $row){
            $message = new Message($row['id'],$row['contenu'],$row['emetteur']);
            echo $message->getEmetteur()." ".$message->getDate().":</br>".$message->getContenu()."<br/><br/>";
        }
        break;
    case 'send':
        $message = new Message(0,$_POST['message'],$_SESSION['utilisateur']->getEmail());
        $dao->save($message);
        header('location: ../page/reclamationClient.php');
        break;
}
?>