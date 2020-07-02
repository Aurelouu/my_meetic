<?php
require_once "../views/deconnexion-form-view.php";
require_once "../controllers/controller-etat.php";
require_once "../controllers/controller-ModifMail.php";


if(empty($_SESSION['mail'])){
    header("Location: ../views/connexion-form-view.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>❣ MYTHICAL ENCOUNTER ❣</title>
    <link href ="../webroot/css/style.css" rel="stylesheet">
</head>
<body>
<h1>❣ MYTHICAL ENCOUNTER ❣ </h1>
        <a href = "../views/search.php">Rechercher</a>
        <a href = "../views/profile-form-view.php">Profil</a>
        <a href = "../views/parametres-form-view.php">Paramètres</a>
        <a href = "../views/modifyMail-view.php">Modifier mail</a>
        <a href = "../views/modifyMdp-view.php">Modifier mot de passe</a>

    <h3> Modification des informations </h3>


<form action="#" method="POST"> 
<input type="submit" id="deconnecter" name="deconnect" value="Se déconnecter">
<input type="submit" id="Supprimer" name="delete" value="Supprimer compte"> 
</body>
</html>