<?php 
 require 'users_db.php';
 require 'section.php';
$email = $_POST['email'];
$pass = md5($_POST['password']);
$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
$result = $users_db->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    //setcookie('username', $row['username'], time() + 10000, "/");
    //setcookie('user_id', $row['id'], time() + 10000, "/");
    echo "<h1>Login Success</h1>";
}
else {
    die("<h1>Login failled<h1>");
}
$users_db->close();
sleep(1);
header('Location: profile.php'); //set response code later
?>