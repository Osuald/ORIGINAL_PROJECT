<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "sbrdatabase";

$mysqli = mysqli_connect($servername, $username, $password, $database);

// Check the connection
// if ($mysqli->connect_error) {
//     die("Connection failed: " . $mysqli->connect_error);
// }
// else{
//     echo "connection successfull";
// }
// Example query
// $query = "SELECT * FROM users";
// $result = $mysqli->query($query);
// $mysqli->close();
?>