<?php 
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "crowd_comments";
session_start();
$conn = new mysqli($server, $username, $password, $database);
$sql = "INSERT INTO comments (username, comment) VALUE ('$_SESSION[username]', '$_POST[comment_]');";
if($conn->query($sql)){
    $log_file = fopen("../logs/log.txt", "a") or die("Unable to open log file.");
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] != ''){
        $userIpAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else { 
        $userIpAddress = $_SERVER['REMOTE_ADDR'];
    }
    $log = "Logged action: comment. \n" . "Username: " . $_SESSION['username'] . ", ID: " . $_SESSION['id'] . 
    ", IP address: " . $userIpAddress . "\n comment: " . $_POST['comment_'] . "\n --------- \n";
    fwrite($log_file, $log);
    fclose($log_file);
    header("Location: ../index.php");
} else {
    die( "failed to submite comment");
}
$conn->close();
?>