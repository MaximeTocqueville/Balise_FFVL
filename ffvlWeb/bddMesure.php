<?php

require('connexionBDD.php');


function getBalise($id){
	
	$bdd=connexionBDD();

	$sql = 'SELECT * FROM mesure WHERE ID_Balise='.$id .' ORDER BY date DESC';
	$reponse = $bdd->query($sql);
	//echo $sql;
    
	$result = $reponse->fetch(PDO::FETCH_ASSOC);
	
	return $result;
	
	
}

function getBaliseMin($id, $typeMesure){

	$bdd=connexionBDD();
	
	$sql = 'SELECT '.$typeMesure.' FROM mesure WHERE ID_Balise='.$id.' ORDER BY date DESC';
	$reponse = $bdd->query($sql);
	//echo $sql;

    $result = $reponse->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function getBaliseByDate($id, $date){

	$bdd=connexionBDD();
	
	$sql = 'SELECT * FROM mesure WHERE ID_Balise='.$id.' AND date="'.$date .'" ORDER BY heure';
	$reponse = $bdd->query($sql);
	//echo $sql;

    $result = $reponse->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}


?>