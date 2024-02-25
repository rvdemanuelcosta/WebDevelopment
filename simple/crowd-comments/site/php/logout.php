<?php 
require 'section.php';
    //setcookie('username', '', time() - 36400, '/');
    if(isset($_SESSION['id'])){
        session_unset();
    session_destroy();
    }
    

    header("Location: ../index.php");
?>