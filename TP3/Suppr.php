<!doctype html>	
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>

<!-- Page de supression de client, produit et facture -->

<body>
				<h1>Hashage fromage</h1><br/>
						<h3 class="panel-title">Suppression d'un client </h3>	<!-- Suppression d'un client -->
						<div class="formulaire" >
							<form action="Delete.php" method="POST">	<!-- renvoi vers la page Delete.php -->
								<label for="NumClient">Numero du client : <br/></label><br/><input type="number" name="NumClient" required /><br/><br/>
							</form>
						</div>
						<h3 class="panel-title">Suppression d'une facture </h3>	<!-- Suppression d'une facture -->
						<div class="formulaire" >
							<form action="Delete.php" method="POST">	<!-- renvoi vers la page Delete.php -->
								<label for="NumFacture">Numero de facture : <br/></label><br/><input type="number" name="NumFacture" required /><br/><br/>
							</form>
						</div>
						<h3 class="panel-title">Suppression d'un produit </h3>	<!-- Suppression d'un produit -->
						<div class="formulaire" >
							<form action="Delete.php" method="POST">	<!-- renvoi vers la page Delete.php -->
								<label for="NumProduit">Numero du produit : <br/></label><br/><input type="number" name="NumProduit" required /><br/><br/>
							</form>
						</div>
				<a href="Affichage.php">Retour accueil</a>	<!-- Lien renvoyant vers la page d'acceuil -->
</body>