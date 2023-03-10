<?php
// Les entetes requises 

header("Access-Control-Origin:*");
header("Content-type:application/json; charset=UTF-8");
header("Access-Control-Allow-Methods:DELETE");
require_once('../config/database.php');
require_once('../models/projet.php');

if($_SERVER['REQUEST_METHOD']==="DELETE"){
    // on ninstancie la base de donées

$database = new Database();
$db = $database->getConnexion();

//on instancie l'objet article

$etudiantsPro=new projet($db);


// on recupere les infos envoyés
$data=json_decode(file_get_contents("php://input"));
if(!empty($data->idProjet)){
    //on hydrate l'objet étudiant
    $etudiantsPro->idProjet=intval($data->idProjet);

    $result=$etudiantsPro->delete();
    if($result){
        http_response_code(201);
        echo json_encode(['message' =>"Etudiant supprimé avec succes"]);
    }else{
        http_response_code(503);
        echo json_encode(['message' =>"Suppression etudiant a echoué"]);
    }
}else{
    echo json_encode(['message' => 'les Données ne sont pas au complet']);
}
}else{
    http_response_code(405);
    echo json_encode(['message'=>"la methode n'est pas autorisé"]);
}