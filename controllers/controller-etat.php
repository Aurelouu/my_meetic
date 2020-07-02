<?php
require_once "../models/manage_user.php";

class Supprimer extends ManageUser{

    public function UserEtat(){
        if (isset($_POST["delete"])) {
            $mail = $_SESSION['mail'];
            if($this->EtatUser($mail)){
                session_destroy();
            }
    }

}}
$delete = new Supprimer();
$delete->UserEtat();