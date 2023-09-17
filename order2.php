<?php
require("connectionstring.php");
$buyerName = $_POST["buyerName"];
$goods = $_POST["goods"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$notes = $_POST["notes"];
$cropImage= $_POST["cropImage"];

$sql = "INSERT INTO orders (buyername, goods,quantity,price,notes,cropimage) VALUES ('$buyerName', '$goods', '$quantity',' $price',' $notes',' $cropImage')";
$sqlconnect=mysqli_query($mysqli,$sql);
header("location:dashboard3.php");

?>