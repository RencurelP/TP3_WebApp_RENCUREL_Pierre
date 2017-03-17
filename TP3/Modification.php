<!doctype html>	
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>
<!-- Page de modification des clients et factures -->
<body>

<header>
	<h1>Recherche</h1><br/>
</header>	

<section>
	<h3>En fonction du client</h3>
		   	<form action="SearchCli.php" method="POST">	
				<label for="Client">Numéro du client : <br/></label><br/><input type="text" name="Client" required/>	<!-- Champ obligatoire dans lequel on renseigne le numero du client recherche -->
				<input id="boutonFo" type="submit" value="Valider" />	<!-- Bouton renvoyant vers la page de recherche de client -->
				<!-- Le champ precedent n'est obligatoire que pour le bouton ci dessus mais pas pour la suite du code -->
			</form>
	<h3>En fonction de la facture</h3>
		   	<form action="SearchBill.php" method="POST">
				<label for="Facture">Numéro de la facture : <br/></label><br/><input type="text" name="Facture" required/> <!-- On renseigne le numero de la facture recherchee -->
			<input id="boutonFo" type="submit" value="Valider" />	<!-- Bouton renvoyant vers la page de recherche de facture -->

		</form>
	<a href="Affichage.php">Retour accueil</a>	<!-- Lien renvoyant vers la page d'acceuil -->
</section>

			

</body>