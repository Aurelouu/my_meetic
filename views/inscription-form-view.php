<?php
require_once "../controllers/control.php";
// if(isset($_SESSION["user"])) {
  //      header("Location: ../index.php");
 //}
//?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="../webroot/css/style.css" rel="stylesheet">
</head>
<body>
<h1> ❣ MYTHICAL ENCOUNTER ❣  </h1>
        <!-- Formulaire d'inscription -->

        <h3> Inscription</h3>


        <form id="form-inscription" action="#" method="POST">
                        <p class="error-message hidden" id="error-empty">Certains champs non remplis</p>
                <!-- Gère les noms -->
                <div class="Insérer nom">
                        <label for="nom"></label>
                        <input type="text" id="nom" name="nom" required="" placeholder="Nom">
                        <p class="error-message hidden" id="error-nom">
                                Erreur sur les caractères demandés, pas de caractères spéciaux</p>
                </div>

                <!-- Gère les prénoms -->
                <div class="Insérer prénom">
                        <label for="prenom"></label>
                        <input type="text" id="prenom" name="prenom" required="" placeholder="Prénom">
                        <p class="error-message hidden" id="error-prenom">Erreur sur les caractères demandés</p>
                </div>

                <!-- Gère la date de naissance -->
                <div class="Insérer la date de naissance">
                        <label for="Date"></label>
                        <input type="date" id="date" name="date_naissance">
                        <p class="error-message hidden" class="error-date">Vous devez avoir plus de 18 ans pour vous inscrire</p>
                </div>

                <!-- Gère le genre -->
                <div class="Insérer votre genre">
                        <label for="genre"></label>
                        <select name="genre" id="genre">
                                <option value=""> -- Choisir son sexe -- </option>
                                <option value="Masculin">Masculin</option>
                                <option value="Feminin">Feminin</option>
                                <option value="Autre">Autre</option>
                        
                        </select>
                </div>

                <!-- Gère le nom de la ville -->
                <div class="Insérer votre ville">
                        <label for="ville"></label>
                        <input type="text" id="ville" name="ville" placeholder="Ville">
                        <p class="error-message hidden" id="error-ville">Erreur sur les caractères demandés</p>
                </div>

                <!-- Gère l'adresse email -->
                <div class="Insérer votre adresse email">
                        <label for="email"></label>
                        <input type="email" id="mail" name="mail" required="" placeholder="Email">
                </div>
                <p class="error-message hidden" id="error-mail">Erreur sur les caractères demandés </p>

                <!-- Gère le mot de passe -->
                <div class="Insérer votre mot de passe">
                        <label for="Mdp"></label>
                        <input type="password" id="passw" name="mdp" required="" placeholder="Mot de passe">
                
                <p class="error-message hidden" id="error-passw">Mot de passe au mauvais format </p>
        </div>
                <!-- Gère le(s) loisir(s) -->
                <div class="Insérer vos loisir(s)">
                        <label for="Loisir"></label>
                        <input type="text" id="loisir" name="nom_loisir" placeholder="Loisirs">
                        <p class="error-message hidden" id="error-loisir">Erreur sur les caractères demandés </p>

                        <br>
                        <input type="submit" id="inscris" name="send" value="S'inscrire">
                </div>


        <!-- <script src="../webroot/js/jquery.js"></script>
        <script src="../webroot/js//main.js"></script> -->
</body>
</html>