<?php
class inscris
{
    private $table = "inscris";
    private $connexion = null;

    //les propriétes de l'objet étudiant

    public $id;
    public $name;
    public $email;
    public $contact;
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
        $sql = "INSERT INTO $this->table(name,email,contact) VALUES(:name,:email,:contact)";

        //Préparation de la requete
        $req = $this->connexion->prepare($sql);

        //execution de la requete
        $re = $req->execute([
            ":name" => $this->name,
            ":email" => $this->email,
            ":contact" => $this->contact
        ]);
        if ($re) {
            return true;
        } else {
            return false;
        }
    }

    // public function update(){
    //     $sql="UPDATE $this->table set name=:name, email=:email, contact=:contact WHERE id=:id";
    //     //Préparation de la requete
    //     $req=$this->connexion->prepare($sql);

    //     //execution de la requete
    //     $re=$req->execute([
    //         ":id"=>$this->id,
    //         ":name" => $this->name,
    //         ":email" => $this->email,
    //         ":contact" => $this->contact
    //     ]);
    //     if($re){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    public function delete()
    {
        $sql = "DELETE FROM $this->table where id=:id";
        $req = $this->connexion->prepare($sql);

        //execution de la requete
        $re = $req->execute([
            ":id" => $this->id,
        ]);
        if ($re) {
            return true;
        } else {
            return false;
        }
    }
}