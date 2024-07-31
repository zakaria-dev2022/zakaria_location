<?php
include_once('utils.class.php');
class Client{


    public $nom;
    public $prenom;
    public $cin;
    public $permis;
    public $tel;
    public $email;
    public $mp;
    public $ph_cin;
    

    function __construct($nom, $prenom ,$cin,$permis,$tel,$email,$mp,$ph_cin) {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->cin = $cin;
        $this->permis = $permis;
        $this->tel=$tel;
        $this->email = $email;
        $this->mp = $mp;
        $this->ph_cin = $ph_cin;
        }


        public function ajouter_client(){
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("insert into client (nom,prenom,cin,permis,tel,email,mot_de_passe,ph_cin) values (?,?,?,?,?,?,?,?) ");
                $req->execute([$this->nom,$this->prenom,$this->cin,$this->permis,$this->tel,$this->email,$this->mp,$this->ph_cin ]);
            } catch (\Throwable $th) {
                echo "echec de l'ajoute d'un produit".$th->getMessage();
            }

        }
         // méthode qui modifie les informations de produit
         public function modifier_client($id){
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("update client set nom=? ,prenom=?,cin=?,permis=?,tel=?,email= ?,mot_de_passe=?,ph_cin=? where id = $id");
                $req->execute([$this->nom,$this->prenom,$this->cin,$this->permis,$this->tel,$this->email,$this->mp,$this->ph_cin ]);
            } catch (\Throwable $th) {
                echo "echec de modifier se client".$th->getMessage();
            }

        }

        static function selectClient($email,$password) {
            try {
                $cnx=Utils::connecter_bd();
                // $req=$cnx->prepare("select * from $table where type = $type");
                $req=$cnx->prepare("SELECT * from client  where email ='$email' and mot_de_passe='$password'");
                $req->execute();
             $resultas=$req->fetch();
             return $resultas;

            } catch (\Throwable $th) {
                echo "echec de selection les resultas".$th->getMessage();
            }

        }
        static function selectClientId($id) {
            try {
                $cnx=Utils::connecter_bd();
                // $req=$cnx->prepare("select * from $table where type = $type");
                $req=$cnx->prepare("SELECT *from client  where id ='$id'");
                $req->execute();
             $resultas=$req->fetch();
             return $resultas;

            } catch (\Throwable $th) {
                echo "echec de selection les resultas".$th->getMessage();
            }

        }








}

?>