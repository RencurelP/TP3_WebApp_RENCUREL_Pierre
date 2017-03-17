<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tp_3_rencurel_pierre', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['NumCLient']))
{
	$req = $bdd->prepare('DELETE client(NumClient)');
	$req->closecursor();
}else if(isset($_POST['NumFacture']))
{
	$req = $bdd->prepare('DELETE facture(NumFacture)');
	$req->closecursor();
}else if(isset($_POST['NumProduits']))
{
	$req = $bdd->prepare('DELETE produits(NumProduits)');
	$req->closecursor();
} 
header('Location: Suppr.php');

?>