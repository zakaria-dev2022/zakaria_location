<?php
include_once('utils.class.php');

class Message{


    public $type_message;
    public $commentaire;
    public $client_id;

    function __construct($type_message,$commentaire ,$client_id) {
        $this->type_message = $type_message ;
        $this->commentaire = $commentaire ;
        $this->client_id = $client_id;
        
        }


        public function ajouter_message(){
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("insert into message (type_message,commentaire,client_id) values (?,?,?) ");
                $req->execute([$this->type_message,$this->commentaire,$this->client_id]);
            } catch (\Throwable $th) {
                echo "echec de l'ajoute d'un produit".$th->getMessage();
            }

        }
         // méthode qui modifie les informations de produit
        

        static function selectTypeMessage($type) {
            try {
                $cnx=Utils::connecter_bd();
                // $req=$cnx->prepare("select * from $table where type = $type");
                $req=$cnx->prepare("SELECT * from message  where type_message ='$type'");
                $req->execute();
             $resultas=$req->fetchAll();
             return $resultas;

            } catch (\Throwable $th) {
                echo "echec de selection les resultas".$th->getMessage();
            }

        }








}

?>