<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/user_profile.css">
        <?php include "section.php";?>
        <title>Profile</title>
</head>
    <body>

    <header>
        <?php include "header.php";?>
    </header>
    <main>
        
        <div class="user_profile_header" style=<?php echo "background-image:url('../users/" . $_COOKIE['username'] . "/cover.png');";?>>
            <div class="pfp"><?php 
                echo "<img class='usr_pfp' src='../users/" . $_COOKIE['username'] . "/pfp.png'>";?>
            </div>
            <div class="edit_pfp_div">
            <!-- <p><?php echo $_COOKIE['username']?></p> -->
            </div>
            <div class="edit_picture_div">
            <!--  -->
            </div>
            <div class="username">
                <p><?php echo $_COOKIE['username']?></p>
            </div>
            
        </div>
        
        <div class="comment-area">
        <form action="comment.php" method="post">
            <p>Make a comment</p>
            <div class="comment-box">
                <textarea name="comment_" maxlength="256"></textarea>
            </div>
            <input type="submit">
        </form>
        </div>
        <!-- TO DELETE
    THIS MUST BE ADDED TO THE EDTI PROFILE PAGE.-->
    <!--
        <form action="upload.php" method="post" enctype="multipart/form-data">
             Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
           <input type="submit" value="Upload Image" name="submit">

        </form> 
-->
    </main>
    <footer></footer>
    </body>

</html>