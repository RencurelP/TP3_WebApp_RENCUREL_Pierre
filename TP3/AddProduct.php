
<!doctype html>	
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>

<!-- Formulaire de login -->

<body>
				<h1>Hashage fromage</h1><br/>
						<h3 class="panel-title">Ajout d'un produit </h3>
						<div class="formulaire" >
							<form action="InsertProduct.php" method="POST">
								<label for="NomProd">Nom du produit : <br/></label><br/><input type="text" name="NomProd" required /><br/><br/>

										<!-- L'utilisation du type "number" oblige l'utilisateur a entrer une valeur numérique -->
								<label for="PUHT">Prix unitaire hors taxes du produit : </label><br/><input type="number" name="PUHT" required/><br/><br/>
								<label for="Des">Description du produit : </label><br/><input type="text" name="Des" required/><br/><br/>
								<input type="submit" value="Valider" />	<!-- bouton de validation -->
							</form>
						</div>
				<a href="Affichage.php">Retour accueil</a>	<!-- lien vers l'acceuil -->
</body>
