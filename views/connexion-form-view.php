<?php
require_once "../controllers/controller-connexion.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href ="../webroot/css/style.css" rel="stylesheet">
    <title> ❣ MYTHICAL ENCOUNTER ❣</title>
</head>
<body>
    <h1> ❣ MYTHICAL ENCOUNTER ❣  </h1>
    <h2> Connexion </h2>
    <form action="" method="POST">
 <!-- Gère l'adresse email -->
 <div class="Insérer votre adresse email">
            <label for="email"></label>
            <input type="email" id="email" name="mail" required="" placeholder="Email">
            </div>

    <!-- Gère le mot de passe -->
            <div class="Insérer votre mot de passe">
            <label for="Mot_de_passe"></label>
            <input type="password" id="mot_de_passe" name="mdp" required="" placeholder="Mot de passe">
            </div>

                                        <br>
            
            <input type="submit" id="Connecter" name="Connecter" value="Se Connecter">

</form>
</body>