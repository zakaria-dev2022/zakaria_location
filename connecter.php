<?php
include_once ("client.class.php");

extract($_POST);
$connecter=Client::selectClient($login,$password);
// print_r($connecter['email']);
// exit();
    if ($connecter){
        session_start();
       $_SESSION['id']=$connecter['id']; 
       $_SESSION['nom']=$connecter['nom']; 
       $_SESSION['prenom']=$connecter['prenom']; 
       $_SESSION['cin']=$connecter['cin']; 
       $_SESSION['permis']=$connecter['permis']; 
       $_SESSION['tel']=$connecter['tel']; 
       $_SESSION['email']=$connecter['email']; 
       $_SESSION['mot_de_passe']=$connecter['mot_de_passe']; 
       Utils::redirection('index2.php');
    }else {
        Utils::location("index.php?connection=echoué");
    }

?>