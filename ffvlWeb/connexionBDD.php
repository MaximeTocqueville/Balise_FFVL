	<?php
	
function connexionBDD(){
	
	$adresseServeur="localhost";
	$login="root";
	$password="";
	$nomBdd= "apiFFVL"; //nom de la BDD
	
	
	try{
		return $bdd=new PDO('mysql:host='.$adresseServeur.';dbname='.$nomBdd.';charset=utf8',$login,$password);
	}
	catch(Exception $e)
	{
		die('Erreur :'.$e->getMessage());
	}	
};

?>