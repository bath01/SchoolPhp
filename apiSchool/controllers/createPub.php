<?php
// Les entetes requises 

header("Access-Control-Origin:*");
header("Content-type:application/json; charset=UTF-8");
header("Access-Control-Allow-Methods:POST");
require_once('../config/database.php');
require_once('../models/publicationn.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // on ninstancie la base de donées

    $database = new Database();
    $db = $database->getConnexion();

    //on instancie l'objet inscrit

    $inscritPub = new publicationn($db);


    // on recupere les infos envoyés
    $dataPub = json_decode(file_get_contents("php://input"));
    if (!empty($dataPub->matierePub) && !empty($dataPub->typeExPub) && !empty($dataPub->lecritPub)) {
        //on hydrate l'objet inscrit
        $inscritPub->matierePub = htmlspecialchars($dataPub->matierePub);
        $inscritPub->typeExPub = htmlspecialchars($dataPub->typeExPub);
        $inscritPub->lecritPub = htmlspecialchars($dataPub->lecritPub);

        $resultPub = $inscritPub->create();
        if ($resultPub) {
            http_response_code(201);
            echo json_encode(['message' => "publication ajouté avec succes"]);
        } else {
            http_response_code(503);
            echo json_encode(['message' => "Ajout publication a echoué"]);
        }
    } else {
        echo json_encode(['message' => 'les Données ne sont pas au complet']);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => "la methode n'est pas autorisé"]);
}