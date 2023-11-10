<?php
include_once('../MODELO/Modelo_User.php');

$userSession = new UserSession();
$userSession->closeSession();

header('location: ../VISTAS/Login.php')
?>