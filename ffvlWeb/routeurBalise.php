<?php
	require("bddBalise.php");
		
	// Récupérer le verbe (méthode http) de la requête
    $request_method = $_SERVER["REQUEST_METHOD"];
    
    // test de la méthode de la requête http
    if($request_method == 'GET'){
        if(!empty($_GET["id"])){       // Si la propriété id existe
            $id = intval($_GET["id"]);
            $reponse = getBalise($id);    // alors appelle de la méthode getBalise($id)
    
           // création de la réponse en JSON
           header('Content-Type: application/json');
           echo json_encode($reponse, JSON_PRETTY_PRINT);
    
        }else{
            $reponse = getBalises();// alors appelle de la méthode getBalises()
          
           // création de la réponse en JSON
           header('Content-Type: application/json');
           echo json_encode($reponse, JSON_PRETTY_PRINT);
        }
    }else{
        // Requête invalide
        header("HTTP/1.0 405 Method Not Allowed");
	}
?>