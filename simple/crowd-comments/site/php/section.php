<?php 
    $user_cookie = null;
    if(isset($_COOKIE['username'])){
        $user_cookie = $_COOKIE['username'];
    }
    if(substr($_SERVER['REQUEST_URI'], -9) == "index.php"){
        $user_pfp = "users/$user_cookie/pfp";
    }
    else{
        $user_pfp = "../users/$user_cookie/pfp";
    }
?>