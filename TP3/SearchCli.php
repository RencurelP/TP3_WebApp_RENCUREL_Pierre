<!doctype html>	
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>

<body>

<?php

	if(isset($_POST['Client']))
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=tp_3_rencurel_pierre', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}

		$req = $bdd->prepare('SELECT * FROM client WHERE NumClient=?');
		$req->execute(array(htmlspecialchars($_POST['Client'])));

		

		while ($donnees = $req->fetch()) 
		{
			?>
			<h1>Client : <?php echo $donnees['NomClient'].' - '.$donnees['PrenomClient']; ?></h1></div>
				<ul class="list-group">
					<li>Ville : <?php echo $donnees['VilleClient']; ?></li>
				    <li>Adresse : <?php echo $donnees['AdresseClient']; ?> </li>
				    <li>Code postal : <?php echo $donnees['CP']; ?></li>
				   <li>Pays : <?php echo $donnees['PaysClient']; ?></li>
				</ul>
			<?php		
		}

		$req = $bdd->prepare('SELECT * FROM facture WHERE NumClient=?');
		$req->execute(array(htmlspecialchars($_POST['Client'])));

		while ($donnees = $req->fetch()) 
		{	$total = 0;
				?>
					<h1>Facture associée au client </h1> <p>Numéro de la facture : <?php echo $donnees['NumFacture']; ?></p></div>
					<ul>
						<li>DateFacture : <?php echo $donnees['DateFacture']; ?></li>
						<li>Listes des produits :</li>
										
						<?php
						$req2 = $bdd->prepare('SELECT * FROM d_facture WHERE NumFacture=?');
						$req2->execute(array($donnees['NumFacture']));
						while($donnees2 = $req2->fetch())
						{
							$req3 = $bdd->prepare('SELECT * FROM produits WHERE NumProduits=?');
							$req3->execute(array($donnees2['NumProduits']));	
							while($donnees3 = $req3->fetch())
							{
								?><li>Nom du produit : <?php echo $donnees3['NomProd']; ?></li>
								<li>Quantité : <?php echo $donnees2['QTE']; ?></li>
								<li>PUHT : <?php echo $donnees3['PUHT'].' euros'; ?></li><?php	
								$total = $total + ($donnees2['QTE']*$donnees3['PUHT']);	
							}			
						}
						?>
						<li>Total : <?php echo $total.' euros'; ?></li><?php				
						?>

					</ul>
				<?php
		
		}
		$req->closeCursor();

	}

?>
	

				<a href="Modification.php">Retour selection</a><br/>
				<a href="Affichage.php">Retour accueil</a>
	
	

</body> 