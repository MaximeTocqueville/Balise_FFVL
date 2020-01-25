<?php

require('connexionBDD.php');


//Fonction permettante de renvoyer toutes les balises 

function getBalises(){
	
	$bdd=connexionBDD();
	$reponse = $bdd->query('SELECT * FROM balise');
	
	$result = $reponse->fetchAll(PDO::FETCH_ASSOC);
	
	return $result;
	
}

function getBalise($id){
	
	$bdd=connexionBDD();
	$reponse = $bdd->query('SELECT * FROM balise WHERE ID_Balise='.$id.'');
	
	$result = $reponse->fetch(PDO::FETCH_ASSOC);
	
	return $result;
	
	
}

?>