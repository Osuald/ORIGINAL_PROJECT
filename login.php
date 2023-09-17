<?php
require ("connectionstring.php");

$email =$_POST['email'];
$password =$_POST['password'];

$ql = "SELECT * FROM user where email='$email' and passwords='$password'";
$results= mysqli_query($mysqli,$ql);
$row = mysqli_fetch_array($results);
if($results){
if($row=mysqli_num_rows($results)>0){
    // $_SESSION['email'] =$email;
   header("location:dashboard3.php");
}
else{
    echo '<script>
    alert("invalid")</script>';
}
}
?>