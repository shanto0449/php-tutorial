<?php
$user = "";
$age = 25;
// if($age>18){
//     $user ="Admin";
// }else{
//     $user = "Guest";
// }
$user = ( $age > 30 ) ? "Admin" : "Guest";
echo $user;
echo "<br>";
$val1 = 25;
$val2 = 26;

$user = ($age > 18 ) ? $val1 : $val2;

echo $user;


?>