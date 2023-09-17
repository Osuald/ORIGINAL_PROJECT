<form action="">
<input type="text" name="fname" placeholder="enter your name">
<input type="text" name="Age" placeholder="enter your age">
<input type="submit" name="bika" placeholder="Ohereza">
</form>
<?php
//variables
$name = $_POST["fname"];
$name =$_GET["fname"];
$age = $_POST["age"];
if($age <20){
    //displaying
echo "Names:".$name;
echo "<br/>";
echo $age;
}
else
{
   for($i=0; $i<$age; $i++) {
       echo "You are aged above 20";
       echo "<br/>";
   }
}



?>