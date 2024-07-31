<?php
session_start();
include_once("client.class.php");
include_once("message.class.php");
extract($_POST);
if (!empty($_SESSION['email'])) {
$message1=new Message($type_message,$message_commentaire,$_SESSION['id']);
$message1->ajouter_message();
Utils::location("index2.php?resultas=message_reussie");
}else{
    Utils::location("index2.php?resultas=message_erreur"); 
    
}

?>