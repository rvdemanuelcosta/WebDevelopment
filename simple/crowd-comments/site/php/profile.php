<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
</head>
    <body>

    <header></header>
    <main>
        <h1><?php 
        echo $_COOKIE['username']; 
        ?></h1>
        <header></header>
        <main>

        <!-- TO DELETE
    THIS MUST BE ADDED TO THE EDTI PROFILE PAGE.-->
        <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">

</form>
        </main>
    </main>
    <footer></footer>
    </body>

</html>