<?php
include_once("utils.class.php");
$numbre_client=Utils::statistique("client");
$numbre_voiture=Utils::statistique("voiture");
print_r($numbre_voiture[0])."<br>";
print_r($numbre_client);


?>