<?php
// Les entetes requises 

header("Access-Control-Origin:*");
header("Content-type:application/json; charset=UTF-8");
header("Access-Control-Allow-Methods:GET");
require_once('../config/database.php');
require_once('../models/projet.php');

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    // on ninstancie la base de donées

    $database = new Database();
    $db = $database->getConnexion();

    //on instancie l'objet etudiants

    $projets = new projet($db);

    // recupération des données

    $statement = $projets->readAll();


    if ($statement->rowCount() > 0) {
        $dataProjet = [];

        $dataProjet[] = $statement->fetchAll();
        // on renvoie les données sous format json
        http_response_code(200);
        echo json_encode($dataProjet);
    } else {
        echo json_encode(["message" => "Aucune données à renvoyé"]);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => "la methode n'est pas autorisé"]);
}