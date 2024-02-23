<?php 
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "crowd_comments";

$conn = new mysqli($server, $username, $password, $database);
$sql = "INSERT INTO comments (username, comment) VALUE ('$_COOKIE[username]', '$_POST[comment_]');";
if($conn->query($sql)){
    echo "Comment submited successfuly.";
} else {
    echo "failed to submite comment";
}
$conn->close();
?>