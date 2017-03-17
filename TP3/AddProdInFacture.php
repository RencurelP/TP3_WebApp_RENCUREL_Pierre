
<!doctype html>	
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>

<!-- Page d'ajout d'un produit dans une facture -->

<body>
				<h1>Hashage fromage</h1><br/>
						<h3 class="panel-title">Ajout d'un produit </h3>
						<div class="formulaire" >
							<form action="InsProdInFacture.php" method="POST">	<!-- Formulaire renvoyant vers InsProdInFacture.php -->
								<label for="QTE">Quantite commande : <br/></label><br/><input type="number" name="QTE" required /><br/><br/>
								<label for="NumProduit">Numero du produit : </label><br/><input type="number" name="NumProduit" required/><br/><br/>
								<label for="NumFacture">Numero de facture : </label><br/><input type="number" name="NumFacture" required/><br/><br/>
								<!-- L'utilisation d'un champ de type "number" empeche la saisie de caracteres autres que des nombres -->
								<input type="submit" value="Valider" />
							</form>
						</div>
				<a href="Affichage.php">Retour accueil</a>	<!-- Lien renvoyant vers la page d'acceuil -->
</body>
