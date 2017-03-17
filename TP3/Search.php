<!-- Page de recherche -->

<!doctype html>	
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>

<body>

<header>
	<h1>Recherche</h1><br/>
</header>	

<section>
		<h3 class="panel-title">En fonction du client</h3>
	   	<form action="SearchCli.php" method="POST">
			<label for="Client">Numéro du client : <br/></label><br/><input type="text" name="Client" required/>
			<input id="boutonFo" type="submit" value="Valider" />	<!-- Bouton renvoyant vers le formulaire de recherche de client -->
		</form>
		<h3 class="panel-title">En fonction de la facture</h3>
	   	<form action="SearchBill.php" method="POST">
			<label for="Facture">Numéro de la facture : <br/></label><br/><input type="text" name="Facture" required/>
			<input id="boutonFo" type="submit" value="Valider" />	<!-- Bouton renvoyant vers le formulaire de recherche de facture -->
		</form>
	<a href="Affichage.php">Retour accueil</a>	<!-- Renvoi vers la page d'acceuil -->
</section>

			

</body>