<?php
require("connectionstring.php");
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$province = $_POST["province"];
$district = $_POST["district"];

$sql = "INSERT INTO user (username, email,passwords,province,district) VALUES ('$username', '$email', '$password',' $province',' $district')";
$sqlconnect=mysqli_query($mysqli,$sql);
header("location:dashboar3.php");

?>