<?php
class projet
{
    private $table = "projet";
    private $connexion = null;

    //les propriétes de l'objet étudiant

    public $idProjet;
    public $titreProjet;
    public $descripProjet;

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
        $sql = "INSERT INTO $this->table(titreProjet,descripProjet) VALUES(:titreProjet,:descripProjet)";

        //Préparation de la requete
        $req = $this->connexion->prepare($sql);

        //execution de la requete
        $re = $req->execute([
            ":titreProjet" => $this->titreProjet,
            ":descripProjet" => $this->descripProjet,
        ]);
        if ($re) {
            return true;
        } else {
            return false;
        }
    }



    public function delete()
    {
        $sql = "DELETE FROM $this->table where idProjet=:idProjet";
        $req = $this->connexion->prepare($sql);

        //execution de la requete
        $re = $req->execute([
            ":idProjet" => $this->idProjet,
        ]);
        if ($re) {
            return true;
        } else {
            return false;
        }
    }
}