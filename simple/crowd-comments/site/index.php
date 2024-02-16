<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/home.css">
        <?php include "php/db_connect.php";?>
        <title>Crowd Comments</title>
    </head>
    <body>
        <header>
            <a href="index.html" id="logo"><img src="images/logo.png" class="logo"></a>
            
            <div>
                <input type="text"> <input type="button" value="&#128270;">
            </div>
            
            <div class="header-links">
                <a href="login.html">Login</a>
                <a href="signup.html">Sign up</a>
                <a href="#">About us</a>
            </div>
           
        </header>
        <main>
            <hr>
            <h1>Welcome to Crowd Comments</h1>
            <h2>Share you comments about anything, clothes, books, movies, 
                animes and many others things.
            </h2>
            <p>Login or create an account with the links below to have access to 
                all features available.
            </p>
            <div class="content-preview">
                
                <?php $row = $result->fetch_assoc() ?>
                <div class="comment-row">
                    <div class="comment">
                        <h2><?php echo $row["username"];?></h2>
                        <h3>Topic</h3>
                        <p><?php echo $row["comment"];?></p>
                    </div>
                    <div class="comment">
                        <h2><?php echo $row["username"];?></h2>

                        <p><?php echo $row["comment"];?></p>
                    </div>
                    <div class="comment">
                        
                    </div>
                </div>
                <div class="comment-row">
                    <div class="comment">

                    </div>
                    <div class="comment">
                        
                    </div>
                    <div class="comment">
                        
                    </div>
                </div>
                <div class="comment-row">
                    <div class="comment">

                    </div>
                    <div class="comment">
                        
                    </div>
                    <div class="comment">
                        
                    </div>
                </div>
                
            </div>
            <div class="home-log-sign">
                <a class="login-bt" href="login.html">login</a>
                <a class="signup-bt" href="signup.html">Sign up</a> 
            </div>
            <br>
            <hr>

        </main>
        <footer>
            
            <p>Website creator: Lucas E. C. M. Mendonça</p>
        </footer>
    </body>
</html>