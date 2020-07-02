<?php
require_once "../controllers/controller-ModifMdp.php"
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="#" method="POST">
<div class="Insérer votre nouveau mot de passe">
<label for="New Mdp"></label>
<input type="password" id="newpassw" name="new_mdp" required="" placeholder="Mot de passe">
<input type="submit" id="newmdp" name="new_passw" value="Changer mdp">
</div>

</form>
</body>
</html>