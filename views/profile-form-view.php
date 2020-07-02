<?php
require_once "../controllers/controller-info.php";
require_once "../views/deconnexion-form-view.php";

if(empty($_SESSION['mail'])){
    header("Location: ../views/connexion-form-view.php");
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="../webroot/css/style.css" rel="stylesheet">
    <title> ❣ MYTHICAL ENCOUNTER ❣</title>
</head>
<body>

        <a href = "../views/accueil.php">Accueil</a>
        <a href = "../views/search.php">Rechercher</a>
        <a href = "../views/parametres.php">Paramètres</a>

    <h1>❣ MYTHICAL ENCOUNTER ❣ </h1>
        <h1> ❣ PROFIL ❣ </h1>

        <h2> <?= $recup["nom"] ?></h2>
        <h2> <?= $recup["prenom"] ?> </h2>
        <h2> <?= $recup["date_naissance"] ?> </h2>
        <h2> <?= $recup["genre"] ?> </h2>
        <h2> <?= $recup["ville"] ?></h2>
        <h2> <?= $recup["date_inscription"] ?></h2>
        <h2> <?= $recup["mail"] ?></h2>
        

        <form action="#" method="POST"> <input type="submit" id="deconnecter" name="deconnect" value="Se déconnecter"> </form>

</body>
</html>
