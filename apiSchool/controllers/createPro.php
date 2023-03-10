<?php
// Les entetes requises 

header("Access-Control-Origin:*");
header("Content-type:application/json; charset=UTF-8");
header("Access-Control-Allow-Methods:POST");
require_once('../config/database.php');
require_once('../models/projet.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // on ninstancie la base de donées

    $database = new Database();
    $db = $database->getConnexion();

    //on instancie l'objet projets

    $projets = new projet($db);


    // on recupere les infos envoyés
    $data = json_decode(file_get_contents("php://input"));
    if (!empty($data->titreProjet) && !empty($data->descripProjet)) {
        //on hydrate l'objet inscrit
        $projets->titreProjet = htmlspecialchars($data->titreProjet);
        $projets->descripProjet = htmlspecialchars($data->descripProjet);

        $result = $projets->create();
        if ($result) {
            http_response_code(201);
            echo json_encode(['message' => "Article ajouté avec succes"]);
        } else {
            http_response_code(503);
            echo json_encode(['message' => "Ajout article a echoué"]);
        }
    } else {
        echo json_encode(['message' => 'les Données ne sont pas au complet']);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => "la methode n'est pas autorisé"]);
}