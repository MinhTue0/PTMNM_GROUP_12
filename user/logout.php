<?php 
    session_start();
    unset($_SESSION["user_data"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
    header("Location: /login.php");
?>