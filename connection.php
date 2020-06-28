<?php 
/* The credentials below is used to access the database */
$host_name = "localhost";// xampp server host name
$db_username = "root";// MySQL default username is root
$password = "";// MySQL default password is empty
$database = "userdb";// The database we defined earlier
$connection = mysqli_connect($host_name, $db_username, $password, $database);
 
// Test connection, if the connection fails, the application will be terminated
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>