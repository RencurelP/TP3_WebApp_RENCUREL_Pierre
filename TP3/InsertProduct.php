<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tp_3_rencurel_pierre', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['NomProd']) AND isset($_POST['PUHT']) AND isset($_POST['Des'])) //Vérifie que les variables sont set
{
	$req = $bdd->prepare('INSERT INTO produits(NomProd, PUHT, Des) VALUES (:NomProd, :PUHT, :Des)');   //Inser le contenu des variables dans la base

    $req->execute(array(
    	'NomProd'=>htmlspecialchars($_POST['NomProd']),
    	'PUHT'=>htmlspecialchars($_POST['PUHT']),
    	'Des'=>htmlspecialchars($_POST['Des'])
    	));

    $req->closeCursor();
    header('Location: AddProduct.php');	//Affichage de la page AddProduct.php
}



?>