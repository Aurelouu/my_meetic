<?php
//Connexion de notre base de données.
session_start();
class bdd
{
    protected function PDOConnexion(){
        
        $servername = "localhost";
        $username = "root";
        $password = "root";

        try{
            $bdd = new PDO("mysql:host=$servername;dbname=my_meetic",$username,$password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }
        return $bdd;
    }}