<?php 
require 'section.php';
    //setcookie('username', '', time() - 36400, '/');
    session_unset();
    session_destroy();

    header("Location: ../index.php");
?>