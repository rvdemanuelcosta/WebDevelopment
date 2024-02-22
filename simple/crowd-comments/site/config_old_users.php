

<?php // checks if the users in the database have a folder and profile picture, if not create one.
    $server = "127.0.0.1";
    $username = "root";
    $pass = "";
    $database = "crowd_comments";
    $sql = "SELECT * FROM users";

    $conn = new mysqli($server, $username, $pass, $database);
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo $row['username'];
        if(file_exists("./users/" . $row['username'])){
            echo "user " . $row['username'] . " exists";
        }
        else {
            // s1 - uncoment s1 to create a folder for users
           mkdir("./users/" . $row['username']);

           // s2 -  uncoment s2 to copy the default profile picture to the users folders.
            

        }
        $default_path = "./users/default/";
        if($row['gender'] == "male"){
            $default_path = "./users/default/male";
        }
        else{
            $default_path = "./users/default/female";
        }
        if(file_exists("./users/" . $row['username'] . "/pfp.png")){
            echo "file exists";
        } else {
            copy("$default_path/pfp.png", "./users/" . $row['username'] . "/pfp.png");
        }
        if(file_exists("./users/" . $row['username'] . "/cover.png")){
            echo "file exists";
        } else {
            copy("$default_path/cover.png", "./users/" . $row['username'] . "/cover.png");
        }
    }
    $conn->close();
?>