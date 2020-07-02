<?php
require_once "../models/manage_user.php";

class Co extends ManageUser {
    public function ControllerCo () {
        if(isset($_POST["Connecter"])){
        if(isset($_POST['mail']) &&!empty($_POST['mail'])){
            $mail = $_POST['mail'];
        if(isset($_POST['mdp']) &&!empty($_POST['mdp'])){
            $mdp = md5(sha1($_POST['mdp']));
            $validator = new ManageUser;
            
            if($validator->CoUser($mail,$mdp)){
            $_SESSION["mail"] = $mail;
           header("Location: ../views/profile-form-view.php");
        
        }else{
            echo "Identifiants mauvais";
        }} else {
        echo "Champs vide : mot de passe ! ";
        }  
        } else {
        echo "Champs vide : adresse mail !";
        }
        } else {
        echo "Champs vides : adresse mail ou/et mot de passe ! ";
        }
    }
}
$connecter = new Co;
$connecter->ControllerCo();