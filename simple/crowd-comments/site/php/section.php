<?php 
    $user_cookie = null;
    if(isset($_COOKIE['username'])){
        $user_cookie = $_COOKIE['username'];
    }
    $user_pfp = "../users/$user_cookie/pfp";
?>