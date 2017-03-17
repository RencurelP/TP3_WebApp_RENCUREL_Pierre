<?php
session_start();	//Démarrage de la session, avant tout code PHP ou HTML
?>

<!doctype html>	
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>

<!-- Page de connexion -->

<body>
		<h1>Hashage de mot de passe</h1><br/>
	<?php
	include 'Validation.php';	//Inclusion d'une page intermédiaire de validation

	?>
		<h3>Connexion </h3>

<!-- Formulaire de connexion -->
		<form action="Validation.php" method="POST">
					<!-- L'utilisation du "required" rend le champ obligatoire -->
			<label for="ID">Identifiant : <br/></label><br/><input type="text" name="ID" required /><br/><br/>	
					<!-- l'utilisation du "password" remplace le text du mot de passe par des puces -->
			<label for="MDP">Mot de passe : <br/></label><br/><input type="password" name="MDP" required/><br/><br/>
					<!-- Le bouton renvoi vers la page de validation -->
			<input type="submit" value="Valider" />
		</form>
</body>