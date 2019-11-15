<?php
include_once('Modelo_User.php');

$userSession = new UserSession();
$userSession->closeSession();

header('location: ../Index.html')
?>