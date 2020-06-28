<?php
include 'connection.php';
// Escape user inputs for security
$first_name = mysqli_real_escape_string($connection, $_REQUEST['firstname']);
$last_name = mysqli_real_escape_string($connection, $_REQUEST['lastname']);
$age = mysqli_real_escape_string($connection, $_REQUEST['age']);
$gender = mysqli_real_escape_string($connection, $_REQUEST['gender']);
$username = mysqli_real_escape_string($connection, $_REQUEST['username']);
$password = mysqli_real_escape_string($connection, $_REQUEST['password']);
 
// Attempt insert query execution
$sql = "INSERT INTO user (firstname, lastname, age, gender, username, password) 
VALUES ('$first_name', '$last_name', '$age', '$gender', '$username', '$password')";
if(mysqli_query($connection, $sql)){
    $message = 'User has been added successfully!'; 
    header("Location: login.php?message=". urlencode($message));// Send success message to login page
} else{
    echo "ERROR: $sql. " . mysqli_error($connection);
}

mysqli_close($connection); // Close connection
?>