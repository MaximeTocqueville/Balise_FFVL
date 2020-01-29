<?php
	require("bddBalise.php");
		
	// Récupérer le verbe (méthode http) de la requête
    $request_method = $_SERVER["REQUEST_METHOD"];
    
    // test de la méthode de la requête http
    if($request_method == 'GET'){
        if(!empty($_GET["id"])){       // Si la propriété id existe
            $id = intval($_GET["id"]);
            $resultat = getBalise($id);    // alors appelle de la méthode getBalise($id)
    
           // création de la réponse en JSON
           header('Content-Type: application/json');
           if($resultat !=false){
            $retour['statut'] = 1;
            $retour['message'] = "GET Balise";
            $retour['donnees'] = $resultat;
            
        } else{
            $retour['statut'] = 0;
            $retour['message'] = "Echec de recuparation des donnees";
            
        }
           echo json_encode($retour, JSON_PRETTY_PRINT);
    
        }else{
            $resultat = getBalises();// alors appelle de la méthode getBalises()
          
           // création de la réponse en JSON
           header('Content-Type: application/json');
           if($resultat !=false){
            $retour['statut'] = 1;
            $retour['message'] = "GET Balises";
            $retour['donnees'] = $resultat;
            
        } else{
            $retour['statut'] = 0;
            $retour['message'] = "Echec de recuparation des donnees";
            
        }
           echo json_encode($retour, JSON_PRETTY_PRINT);
        }
    }else{
        // Requête invalide
        header("HTTP/1.0 405 Method Not Allowed");
	}
?>