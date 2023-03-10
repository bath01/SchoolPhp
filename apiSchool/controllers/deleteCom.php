<?php
// Les entetes requises 

header("Access-Control-Origin:*");
header("Content-type:application/json; charset=UTF-8");
header("Access-Control-Allow-Methods:DELETE");
require_once('../config/database.php');
require('../models/commentaire.php');

if ($_SERVER['REQUEST_METHOD'] === "DELETE") {
    // on ninstancie la base de donées

    $database = new Database();
    $db = $database->getConnexion();

    //on instancie l'objet article

    $etudiantsCom = new commentaire($db);


    // on recupere les infos envoyés
    $dataCom = json_decode(file_get_contents("php://input"));
    if (!empty($dataCom->idCom)) {
        //on hydrate l'objet étudiant
        $etudiantsCom->idCom = intval($dataCom->idCom);

        $resultCom = $etudiantsCom->delete();
        if ($resultCom) {
            http_response_code(201);
            echo json_encode(['message' => "Commentaire supprimé avec succes"]);
        } else {
            http_response_code(503);
            echo json_encode(['message' => "Suppression Commentaire a echoué"]);
        }
    } else {
        echo json_encode(['message' => 'les Données ne sont pas au complet']);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => "la methode n'est pas autorisé"]);
}