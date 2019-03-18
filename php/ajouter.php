<?php 

if (isset($_POST['poste']) && isset($_POST['contrat']) && isset($_POST['description'])) {

	require_once("dbco.php");

	$poste = htmlspecialchars($_POST['poste']);
	$contrat = htmlspecialchars($_POST['contrat']);
	$description = htmlspecialchars($_POST['description']);


	$maConnexion= new PDO($dns, $user, $mdp);


	$req = "INSERT INTO annonce (poste, contrat, description) values (?,?,?);";

	$prep=$maConnexion->prepare($req); // preparation de la requete
	$prep->bindParam(1,$poste);//on execute les requetessql
	$prep->bindParam(2,$contrat);
	$prep->bindParam(3,$description);
	$prep->execute();


	header('location:recrutement.php');
}

 ?>
