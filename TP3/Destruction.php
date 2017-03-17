<?php 
session_start();

$_SESSION = array();

session_destroy();	//Destruction de la session
header('Location: Index.php');	//Retour a la page Index.php (page de connexion)

?>