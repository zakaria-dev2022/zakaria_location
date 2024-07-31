<?php
include_once('utils.class.php');

class Voiture{

    public $id_marque;
    public $nom_voiture;
    public $matricule;
    public $type_boite_vitesse;
    public $type_carburant;
    public $model;
    public $prix;
    public $assurance;
    public $carte_grise;
    public $visite;
    public $ph_voiture;

    // Constructeur
    public function __construct($id_marque, $nom_voiture, $matricule, $type_boite_vitesse, $type_carburant, $model, $prix, $assurance, $carte_grise, $visite, $ph_voiture) {
        $this->id_marque = $id_marque;
        $this->nom_voiture = $nom_voiture;
        $this->matricule = $matricule;
        $this->type_boite_vitesse = $type_boite_vitesse;
        $this->type_carburant = $type_carburant;
        $this->model = $model;
        $this->prix = $prix;
        $this->assurance = $assurance;
        $this->carte_grise = $carte_grise;
        $this->visite = $visite;
        $this->ph_voiture = $ph_voiture;
    }

        // méthode qui ajoute les informations de voiture
        // public function ajouter_voiture(){
        //     try {
        //         $cnx=Utils::connecter_bd();
        //         $req=$cnx->prepare("insert into voiture (id_marque,prix,description,type_voiture,ph_voiture) values (?,?,?,?,?) ");
        //         $req->execute([$this->id_marque,$this->prix,$this->description,$this->type_voiture,$this->ph_voiture]);
        //     } catch (\Throwable $th) {
        //         echo "echec de l'ajoute d'un voiture".$th->getMessage();
        //     }

        // }
        public function ajouter_voiture(){
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("INSERT INTO voiture (id_marque, nom_voiture, matricule, type_boite_vitesse, type_carburant, model, prix, assurance, carte_grise, visite, ph_voiture) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $req->execute([$this->id_marque, $this->nom_voiture, $this->matricule, $this->type_boite_vitesse, $this->type_carburant, $this->model, $this->prix, $this->assurance, $this->carte_grise, $this->visite, $this->ph_voiture]);
            } catch (\Throwable $th) {
                echo "Échec de l'ajout d'une voiture : ".$th->getMessage();
            }
        }

        // méthode qui modifie les informations de voiture
        // public function modifier_voiture($id){
        //     try {
        //         $cnx=Utils::connecter_bd();
        //         $req=$cnx->prepare("update voiture set id_marque=? ,prix=?,description=?,type_voiture=?,ph_voiture= ? where id = $id");
        //         $req->execute([$this->id_marque,$this->prix,$this->description,$this->type_voiture,$this->ph_voiture]);
        //     } catch (\Throwable $th) {
        //         echo "echec de modifier se voiture".$th->getMessage();
        //     }

        // }

        public function modifier_voiture($id){
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("UPDATE voiture SET id_marque=?, nom_voiture=?, matricule=?, type_boite_vitesse=?, type_carburant=?, model=?, prix=?, assurance=?, carte_grise=?, visite=?, ph_voiture=? WHERE id = ?");
                $req->execute([$this->id_marque, $this->nom_voiture, $this->matricule, $this->type_boite_vitesse, $this->type_carburant, $this->model, $this->prix, $this->assurance, $this->carte_grise, $this->visite, $this->ph_voiture, $id]);
            } catch (\Throwable $th) {
                echo "Échec de la modification de cette voiture : ".$th->getMessage();
            }
        }
        


        static function selectElement($type) {
            try {
                $cnx=Utils::connecter_bd();
                // $req=$cnx->prepare("select * from $table where type = $type");
                $req=$cnx->prepare("SELECT v.*,t.* FROM voiture v JOIN type_marque t on V.id_marque = t.id where t.type='$type'");
                $req->execute();
             $resultas=$req->fetchAll();
             return $resultas;

            } catch (\Throwable $th) {
                echo "echec de selection les resultas".$th->getMessage();
            }

        }
        


}

?>