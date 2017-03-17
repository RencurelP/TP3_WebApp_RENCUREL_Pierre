
<!doctype html>	
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>

<!-- Page d'ajout de client et de facture -->

<body>
				<h1>Hashage fromage</h1><br/>
						<h3 class="panel-title">Ajout d'un client </h3>	<!-- Ajout d'un client -->
						<div class="formulaire" >
							<form action="Inser.php" method="POST">	<!-- renvoi vers la page Inser.php -->
								<label for="NomClient">Nom du client : <br/></label><br/><input type="text" name="NomClient" required /><br/><br/>	<!-- Renseignement du nom du client -->
								<label for="PrenomClient">Prenom du client : </label><br/><input type="text" name="PrenomClient" required/><br/><br/>	<!-- Renseignement du prenom du client -->
								<label for="AdresseClient">Adresse du client : </label><br/><input type="text" name="AdresseClient" required/><br/><br/>	<!-- Renseignement de l'adresse du client -->
								<label for="CP">Code postal du client : </label><br/><input type="text" name="CP" required/><br/><br/>	<!-- Renseignement du code postal du client -->
								<label for="VilleClient">Ville du client : </label><br/><input type="text" name="VilleClient" required/><br/><br/>	<!-- Renseignement de la ville du client -->
								<label for="PaysClient">Pays du client : </label><br/><input type="text" name="PaysClient" required/><br/><br/>	<!-- Renseignement du Pays du client -->
								<input type="submit" value="Valider" />
							</form>
						</div>
						<h3 class="panel-title">Ajout d'une facture </h3>	<!-- Ajout d'une facture -->
						<div class="formulaire" >
							<form action="Inser_Facture.php" method="POST">	<!-- renvoi vers la page Inser_Facture.php -->
								<label for="NumClient">Numéro du client : <br/></label><br/><input type="number" name="NumClient" required /><br/><br/>	<!-- renseignement du numero du client auquel on ajoute une facture, l'utilisation d'un champ number oblige l'utilisateur a entrer un nombre -->
								<input type="submit" value="Valider" />
							</form>
						</div>
				<a href="Affichage.php">Retour accueil</a>	<!-- Lien renvoyant vers la page d'acceuil -->
</body>
