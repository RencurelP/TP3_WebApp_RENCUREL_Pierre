<?php
//Page annexe permettant de renseigner un utilisateur et un mot de passe predefini, ce dernier sera hash
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tp_3_rencurel_pierre', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));	//Gestion des erreurs via les fonctions PDO
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());	//Affichage des erreurs
}

$nom = "admin";	//Nom d'utilisateur par defaut
$mdp = password_hash("admin", PASSWORD_DEFAULT);	//Mot de passe par defaut, utilisation des fonction hash pour hasher le mot de passe

$req = $bdd->prepare('INSERT INTO user(ID, MDP) VALUES (:USER,:MDP)');	//Insertion du nom d'utilisateur et du mot de passe hasher dans la base

    $req->execute(array(
    	'USER'=>$nom,
    	'MDP'=>$mdp
    	));

    $req->closeCursor();	//Fermeture du curseur

?>