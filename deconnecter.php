<?php
include_once('utils.class.php');
session_start();
session_destroy();
Utils::redirection('index.php');
?>