<?php

    class Utils{


         //connection a la base donner restaurant
         static function connecter_bd(){
            try {
                $cnx=new PDO("mysql:host=localhost;dbname=location",'root', '');
                return $cnx;
            } catch (\Throwable $th) {
                echo "echec de connecter a la base donner".$th->getMessage();
            }
        }

        //redirection vers votre page
        static function redirection($page) {
            header('Location:'.$page);
        }


        static function select_all($table) {
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("select * from $table");
                $req->execute();
             $resultas=$req->fetchAll();
             return $resultas;

            } catch (\Throwable $th) {
                echo "echec de selection les resultas".$th->getMessage();
            }

        }
        
        static function select_commentaire() {
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("select m.*,c.* from message m  join client c on m.client_id =c.id where type_message = 'Commentaire' ");
                $req->execute();
             $resultas=$req->fetchAll();
             return $resultas;

            } catch (\Throwable $th) {
                echo "echec de selection les resultas".$th->getMessage();
            }

        }
        
        static function select_logo() {
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("select logo from admin ");
                $req->execute();
             $resultas=$req->fetch();
             return $resultas;

            } catch (\Throwable $th) {
                echo "echec de selection les resultas".$th->getMessage();
            }

        }

        static function statistique($table) {
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("SELECT COUNT(*) as $table FROM $table ");
                $req->execute();
             $resultas=$req->fetch();
             return $resultas;

            } catch (\Throwable $th) {
                echo "echec de selection les resultas".$th->getMessage();
            }

        }
        

        static function location($page){
            header("location:$page");
        }
        
        static function implode_image($name_img,$cin) {
            try {
                $name =$_FILES[$name_img]['name'];
                $typeFichier = pathinfo($name, PATHINFO_EXTENSION);
                $name2=date('YmdHis').'_'.$cin.'.'.$typeFichier ;  //on ajoute la date pour que le nom soit unique et
                $tmp_name =$_FILES[$name_img]['tmp_name'];
                $aff_image="assets/img/clients/$name2";
                move_uploaded_file($tmp_name,$aff_image);
                return $name2;              

            } catch (\Throwable $th) {
                echo "echec de imploder l'image".$th->getMessage();
            }

        }









    }
?>