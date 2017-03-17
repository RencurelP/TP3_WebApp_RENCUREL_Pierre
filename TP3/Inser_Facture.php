<?php
//Insertion de la facture dans la base de donnees

date_default_timezone_set('UTC');   //Setting du standard temporel


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tp_3_rencurel_pierre', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //Gestion des erreurs
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['NumClient']))  //Verification que le numero de client auquel on ajoute la facture existe
{
	$req = $bdd->prepare('INSERT INTO facture(NumClient, DateFacture) VALUES (:NUM, :DAY)');   //Ajout a la facture de la date et du numero de client associe (le numero de facture est un auto increment)

    $req->execute(array(
    	'NUM'=>($_POST['NumClient']),  //Ajout du numero de client associe
        'DAY'=>date('Y-m-d'),   //Ajout de la date en format annee / mois / jour avec les mois et jours en 2 chiffres
        ));


    $req->closeCursor();
    header('Location: AddProdInFacture.php');	//Renvoi vers la page d'ajout de produit pour immediatement completer la facture
}

?>