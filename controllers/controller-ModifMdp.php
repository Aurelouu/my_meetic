<?php
require_once "../models/manage_user.php";


class ModifMdp extends ManageUser{

    public function ModificationMdp(){
        if(isset($_POST["new_passw"])){ 
            $mdp =md5(sha1($_POST['new_mdp']));
            $session = $_SESSION['mail'];
        if($this->ModifMdp($mdp,$session)){
            
        header("Location: ../views/profile-form-view.php");
        }

    }
}
}
$modif = new ModifMdp();
$modif->ModificationMdp();