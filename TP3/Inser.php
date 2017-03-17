<?php
//Insertion du client dans la base de donnees

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tp_3_rencurel_pierre', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //Gestion et affichage des erreurs
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['NomClient']) AND isset($_POST['PrenomClient']) AND isset($_POST['AdresseClient']) AND isset($_POST['CP']) AND isset($_POST['VilleClient']) AND isset($_POST['PaysClient']))    //Verification que tout les champs sont completes
{
	$req = $bdd->prepare('INSERT INTO client(NomClient, PrenomClient, AdresseClient, CP, VilleClient, PaysClient) VALUES (:NOM, :PRENOM, :ADRESSE, :CP, :VILLE, :PAYS)');  //Preparation de la base pour y inserer le contenu des champs

    $req->execute(array(    //Insertion du contenu des champs dans la base
    	'NOM'=>htmlspecialchars($_POST['NomClient']),
    	'PRENOM'=>htmlspecialchars($_POST['PrenomClient']),
    	'ADRESSE'=>htmlspecialchars($_POST['AdresseClient']),
    	'CP'=>htmlspecialchars($_POST['CP']),
    	'VILLE'=>htmlspecialchars($_POST['VilleClient']),
    	'PAYS'=>htmlspecialchars($_POST['PaysClient'])
    	));    //L'utilisation du "htmlspecialchars" permet d'eviter l'injection de code securisant la base et l'integrite du site

    $req->closeCursor();
    header('Location: Ajout.php');	//Retour vers la page d'ajout
}



?>