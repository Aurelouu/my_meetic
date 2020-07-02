<?php
require_once "../models/manage_user.php";

class ModifMail extends ManageUser{

    public function ModificationMail(){
        if(isset($_POST["newmail"])){ 
            $mail = $_POST['new_mail'];
            $session = $_SESSION['mail'];
        if($this->ModifMail($mail,$session)){
            $_SESSION['mail'] = $mail;
        header("Location: ../views/profile-form-view.php");
        }

    }
}
}
$modif = new ModifMail();
$modif->ModificationMail();