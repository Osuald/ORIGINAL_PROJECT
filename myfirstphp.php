<?php
echo "hello world";
echo "<br/>";
print "my name is osuald";
$name='Osuald Kai';
$age="22";
echo "<br/>";
echo $name."".$age;
echo "is ";
echo $age."";
echo " Years old";
echo strlen($name);
echo "<br/>";
echo strpos("Hello dworld!","world");
$d=date("D");
if ($d=="Fri") 
{
    echo "Hello!<br />";
    echo "Have a nice weekend!";
    echo "See you on Monday!";
}
elseif ($d=="Sun")
 echo "Have a nice Sunday!";
else echo "Your are out of lucky";
$cars=array("mercedes","hyundai","toyota","chevrolet");
$i=0;
while($i<3){
    echo $cars[$i]."<br/>";
    $i++;
}
    echo $cars[2];
    $ages['Peter'] = "32";
    $ages['Quagmire'] = "30";
    $ages['Joe'] = "34";    
    echo "Quagmire is".$ages['Quagmire'];
?>