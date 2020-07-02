<?php
require_once "../models/manage_user.php";


class Control extends ManageUser
{
    public function Inscrit()
    {
       
        if (isset($_POST["send"])) {
            if (isset($_POST['date_naissance']) &&!empty($_POST['date_naissance'])) {
            $date_naissance = htmlspecialchars($_POST['date_naissance']);
            if (date($date_naissance) < '2002/01/01') {

            if (isset($_POST['mail']) && !empty($_POST['mail'])) {
            $mail = ($_POST['mail']);
            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

            if (isset($_POST['nom']) &&!empty($_POST['nom'])){
            $nom = htmlspecialchars($_POST['nom']); 
            if (preg_match('/^[a-zA-Z_]+$/', $nom)){

            if (isset($_POST['prenom']) &&!empty($_POST['prenom'])){
            $prenom = htmlspecialchars($_POST['prenom']);
            if (preg_match('/^[a-zA-Z_]+$/', $prenom)){

            if (isset($_POST['ville']) &&!empty($_POST['ville'])){
            $ville = htmlspecialchars($_POST['ville']);
            if (preg_match('/^[a-zA-Z_]+$/', $ville)){

            if (isset($_POST['genre']) &&!empty($_POST['genre'])){
            $genre = htmlspecialchars($_POST['genre']);
            
            if (isset($_POST['mdp']) &&!empty($_POST['mdp'])){
            $mdp = md5(sha1($_POST['mdp']));
            
            if (isset($_POST['nom_loisir']) &&!empty($_POST['nom_loisir'])){
            $nom_loisir = htmlspecialchars($_POST['nom_loisir']);
            if (preg_match('/^[a-zA-Z_]+$/', $nom_loisir)){
            
            $manage = new ManageUser();
            $manage->addUser($nom, $prenom, $ville, $genre, $mdp, $mail, $date_naissance, $nom_loisir);
                $_SESSION["mail"] = $mail;
               header("Location: ../views/connexion-form-view.php");
            }
            
            else{
                echo "Erreur nom loisir";
            }
        }} else {
            echo "Erreur mot de passe";
        }
    }
else {
    echo "Erreur genre";
}}}
else{
    echo "Erreur ville";
}}}
else{
    echo "Erreur prenom";
}}
else{
    echo "Erreur nom";
}}}}
else{
    echo "Erreur mail";
}}}
else{
    echo "Erreur Date naissance";
}
}
}}
$inscription = new Control();
$inscription->Inscrit();

            /* else{
                $errors = "Erreur nom loisir";
            }
            else{

            } */
            
            
            
            
            
            
            
            
                /* if(!empty($errors)){
                
            $_SESSION['errors'] = $errors;
            header ("Location: ../views/inscription-form-view.php");
            }
            if(empty($success)){
            $_SESSION['success_sign'] = $success;
            header ("Location: ../views/connexion-form-view.php");
            
            $manage = new ManageUser();
            $manage->addUser($nom, $prenom, $ville, $genre, $mdp, $mail, $date_naissance, $nom_loisir); */
        
/* $inscription = new Control();
$inscription->Inscrit(); */
