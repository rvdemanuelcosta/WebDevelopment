<?php 
    setcookie('username', '', time() - 36400, '/');
    header("Location: ../index.php");
?>