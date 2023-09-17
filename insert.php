
<?php
// Establish a database connection
//$servername = "localhost";
//$username = "root";
//$password = "";
//$database = "SBRMarketplace";

//$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
//if ($conn->connect_error) {
 //   die("Connection failed: " . $conn->connect_error);
//}

// Process form data
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    
    // Insert data into the "users" table
    $sql = "INSERT INTO users (id,username, email, passwords,firstname,lastname) VALUES ('$id', '$username', '$email', '$password',' $firstname',' $lastname')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



// Close the database connection
$conn->close();

*/
require("connectionstring.php");
$id = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];

$sql = "INSERT INTO users (id,username, email, passwords,firstname,lastname) VALUES ('$id', '$username', '$email', '$password',' $firstname',' $lastname')";
$sqlconnect=mysqli_query($mysqli,$sql);
header("location:home.php");

?>