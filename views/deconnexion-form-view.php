<?php

if(isset($_POST["deconnect"])){
     session_destroy();

    header("Location: ../index.php");
}
?>