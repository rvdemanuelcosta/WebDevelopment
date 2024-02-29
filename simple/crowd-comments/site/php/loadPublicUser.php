<?php 
$username = $_GET['username'];
    echo $username;
    echo "<div class='user_profile_header' style='background-image: url(../../users/$username/cover.png)';>
        <div class='pfp'>
            <img class='usr_pfp' src='../../users/$username/pfp.png'>
        </div>
        <div>
            <p>$username</p>
        </div>
    </div>
    ";
?>