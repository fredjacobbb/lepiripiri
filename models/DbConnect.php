<?php 

    class DbConnect {

        public static function connect(){
            try {
                // $pdo = new PDO('mysql:host=localhost;dbname=lepiripiri','root','password');
                $pdo = new PDO('mysql:host=mariadb;dbname=lepiripiri', 'user1', 'passworduser1');
                // $pdo = new PDO('mysql:host=mariadb;dbname=lepiripiri', 'root', 'password');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (Exception $err){
                var_dump($err->getMessage());                
            }
            
        }

    }