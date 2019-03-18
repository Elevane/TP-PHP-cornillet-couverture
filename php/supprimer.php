<?php 
	
require_once('dbco.php');

if (isset($_POST['id'])) {

	require_once("dbco.php");

	$id = htmlspecialchars($_POST['id']);
	

	$maConnexion= new PDO($dns, $user, $mdp);


	$req = "delete from annonce where id=?;";

	$prep=$maConnexion->prepare($req); // preparation de la requete
	$prep->bindParam(1,$id);//on execute les requetessql
	$prep->execute();


	header('location:recrutement.php');
}


 ?>