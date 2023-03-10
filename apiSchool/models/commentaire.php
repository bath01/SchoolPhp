<?php
class commentaire
{
    private $table = "commentaire";
    private $connexion = null;

    //les propriétes de l'objet étudiant

    public $idCom;
    public $comment;
    public function __construct($db)
    {
        if ($this->connexion == null)
            $this->connexion = $db;
    }

    //lecture des articles

    public function readAll()
    {
        //on crée la requete
        $sql = "SELECT * FROM $this->table";

        $req = $this->connexion->query($sql);
        return $req;
    }

    public function create()
    {
        $sql = "INSERT INTO $this->table(comment,created_date) VALUES(:comment,NOW())";

        //Préparation de la requete
        $req = $this->connexion->prepare($sql);

        //execution de la requete
        $re = $req->execute([
            ":comment" => $this->comment,
        ]);
        if ($re) {
            return true;
        } else {
            return false;
        }
    }



    public function delete()
    {
        $sql = "DELETE FROM $this->table where idCom=:idCom";
        $req = $this->connexion->prepare($sql);

        //execution de la requete
        $re = $req->execute([
            ":idCom" => $this->idCom,
        ]);
        if ($re) {
            return true;
        } else {
            return false;
        }
    }
}