<?php
require_once "../models/manage_user.php";

class Info extends ManageUser{

    public function Profile(){
    return $this->InfoUser($_SESSION["mail"]);

    }
    
}
$info = new Info();
$recup = $info->Profile();
