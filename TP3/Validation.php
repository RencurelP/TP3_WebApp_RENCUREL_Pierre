<?php

	if(isset($_POST['ID']) AND isset($_POST['MDP']))	//On verifie que les champs sont renseignes
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=tp_3_rencurel_pierre', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));	//Gestion de la base via PDO, permettant egalement la gestion des erreurs
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());	//Affichage d'un message d'erreur lors de l'occurence d'une erreur
		}

		$ID_form = htmlspecialchars($_POST['ID']);
		$MDP_form = htmlspecialchars($_POST['MDP']);


		$req = $bdd->prepare('SELECT MDP FROM user WHERE ID =?');	//Preparation de la base de donnees

		$req->execute(array($ID_form));

		if(empty($donnees))
		{
			header('Location: Index.php');	//Si les identifiants ne sont pas corrects on renvoi vers l'index
		}
		
		while ($donnees = $req->fetch()) 
		{
			if(password_verify($MDP_form, $donnees['MDP']))	//Verification du mot de passe hashe avant de procede vers le reste du site
			{	
				$req->closeCursor();	//Fermeture du curseur
				header('Location: Affichage.php');	//Envoi vers l'acceuil du site
			}
		}

    }
?>