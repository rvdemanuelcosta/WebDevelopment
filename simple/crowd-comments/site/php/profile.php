
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/user_profile.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/buttons.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/loadUserComments.js"></script>
        <title>Profile</title>
</head>
    <body onload="loadComments()">

    <header>
        <?php include "header.php"; include "db_connect.php";?>
        <?php if(!isset($_SESSION['id'])){
    header("Location: ../index.php");
    }
    ?>
    </header>
    <main>
        
        <div class="user_profile_header" style=<?php echo "background-image:url('../users/" . $_SESSION['username'] . "/cover.png');";?>>
            <div class="pfp"><?php 
                echo "<img class='usr_pfp' src='../users/" . $_SESSION['username'] . "/pfp.png'>";?>
            </div>
            <div class="edit_pfp_div">
            <!-- <p><?php echo $_SESSION['username'];?></p> -->
            </div>
            <div class="edit_picture_div">
            <!--  -->
            </div>
            <div class="username">
                <p><?php echo $_SESSION['username'];?></p>
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
        <div class="commentsToolBar vw-50 margin-h-auto">
            <h2>Comments</h2>
            <input type="button" value="&#128260" onclick="loadComments()" id="reload-bt">
        </div>
        <div class="comment-section vw-50 margin-h-auto" id="commentSection">
            <?php /*
                $userComQuery = "SELECT * FROM comments WHERE username='$_SESSION[username]'";
                $commResult = $conn->query($userComQuery);
                while($row = $commResult->fetch_assoc()){
                    echo "<div class='comment'><div class='pfp'><img src='../users/$_SESSION[username]/pfp.png' class='user_pfp'></div>
                    <a href='../users/$_SESSION[username]'>$_SESSION[username]</a><br><p>$row[comment]</p></div>";
                } */
            ?>
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
    <footer><?php include "footer.php";?></footer>
    </body>

</html>