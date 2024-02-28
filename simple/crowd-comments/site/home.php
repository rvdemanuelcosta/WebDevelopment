<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/header.css">
        <title>Home</title>
    </head>
    <body>
        <header><?php include "php/header.php";?>
        </header>
        <main><?php 
        if(file_exists("./index.php")){
            echo substr($_SERVER["REQUEST_URI"], 43);
        }
         ?></main>
        <footer></footer>
    </body>
</html>