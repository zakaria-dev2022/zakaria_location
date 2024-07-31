<?php
include_once("client.class.php");
extract($_POST);

if ($nom !=""&& $prenom!=""&& $cin!=""&& $permis!=""&& $tel!=""&& $email!=""&&$mp!=""&& $cmp!="" && $mp===$cmp) {
    $aff_image=Utils::implode_image('ph_cin',$cin); 
    $newclient=new client($nom,$prenom,$cin,$permis,$tel,$email,$mp,$aff_image);
    $newclient->ajouter_client();
    Utils::location("index.php?resultas=ok");
}else
Utils::location("inscrire.php?resultas=no");





?>