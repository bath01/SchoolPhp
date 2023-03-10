<?php
// Les entetes requises 

header("Access-Control-Origin:*");
header("Content-type:application/json; charset=UTF-8");
header("Access-Control-Allow-Methods:GET");
require_once('../config/database.php');
require('../models/commentaire.php');

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    // on ninstancie la base de donées

    $database = new Database();
    $db = $database->getConnexion();

    //on instancie l'objet etudiants

    $etudiantsCom = new commentaire($db);

    // recupération des données

    $statementCom = $etudiantsCom->readAll();

    if ($statementCom->rowCount() > 0) {
        $dataCom = [];

        $dataCom[] = $statementCom->fetchAll();
        // on renvoie les données sous format json
        http_response_code(200);
        echo json_encode($dataCom);
    } else {
        echo json_encode(["message" => "Aucune données à renvoyé"]);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => "la methode n'est pas autorisé"]);
}