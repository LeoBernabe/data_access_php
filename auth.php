<?php
include 'connection.php';
session_start();
$username = mysqli_real_escape_string($connection, $_REQUEST['username']);
$password = mysqli_real_escape_string($connection, $_REQUEST['password']);

$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password' LIMIT 1";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    $obj = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $obj;
    $message = 'Access Granted'; 
    header("Location: home.php?message=". urlencode($message));
} else {
    $message = 'Invalid username or password!'; 
    header("Location: login.php?message=". urlencode($message));
}

mysqli_close($connection);
?>