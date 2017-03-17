<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tp_3_rencurel_pierre', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['QTE']) AND isset($_POST['NumProduit']) AND isset($_POST['NumFacture']))    //Verification que les variables sont set
{
	$req = $bdd->prepare('INSERT INTO d_facture(QTE, NumProduit, NumFacture) VALUES (:QTE, :NUMERO, :FAC)');   //insertion des valeurs dans la base

    $req->execute(array(
    	'QTE'=>($_POST['QTE']),
    	'NUMERO'=>($_POST['NumProduit']),
        'FAC'=>htmlspecialchars($_POST['NumFacture'])
    	));

    $req->closeCursor();
    header('Location: Ajout.php');	//Affichage de la page Ajout.php
}



?>