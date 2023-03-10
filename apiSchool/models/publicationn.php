<?php
class publicationn
{
    private $table = "publicationn";
    private $connexion = null;

    //les propriétes de l'objet étudiant

    public $idPub;
    public $matierePub;
    public $typeExPub;
    public $imagePub;
    public $lecritPub;

    
    public function __construct($db)
    {
        if ($this->connexion == null)
            $this->connexion = $db;
    }

    //lecture des articles

    public function readAll()
    {
        //on crée la requete
        $sql = "SELECT idPub, typeExPub, lecritPub,matieres.nom as matierePub
            FROM $this->table  
            INNER JOIN matieres
            ON matieres.id = publicationn.matierePub
          ";

        $req = $this->connexion->query($sql);
        // var_dump($req ); die;
        return $req;
    }

    public function create()
    {
        $sql = "INSERT INTO $this->table(matierePub,typeExPub,lecritPub) VALUES(:matierePub,:typeExPub,:lecritPub)";

        //Préparation de la requete
        $req = $this->connexion->prepare($sql);

        //execution de la requete
        $re = $req->execute([
            ":matierePub" => $this->matierePub,
            ":typeExPub" => $this->typeExPub,
            ":lecritPub" => $this->lecritPub
        ]);
        if ($re) {
            return true;
        } else {
            return false;
        }
    }



    public function delete()
    {
        $sql = "DELETE FROM $this->table where idPub=:idPub";
        $req = $this->connexion->prepare($sql);

        //execution de la requete
        $re = $req->execute([
            ":idPub" => $this->idPub,
        ]);
        if ($re) {
            return true;
        } else {
            return false;
        }
    }
}