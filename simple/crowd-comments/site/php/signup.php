<?php
$server = "127.0.0.1";
$user = "root";
$password = "";
$database = "crowd_comments";

$conn = new mysqli($server, $user, $password, $database);
$sql = "INSERT INTO users (username, email, password, gender) VALUES('$_POST[username]', '$_POST[email]', '$_POST[passwd]', '$_POST[gender]')";

if($conn->query($sql) === TRUE){
    echo "User account created successfuly.";
}
 else {
    echo "error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>