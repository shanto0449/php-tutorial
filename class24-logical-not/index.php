<?php
$username = "Raj-1";
if ( !($username == 'ab')) {
    echo "Hello";
}
echo "<br>";

 $user_lenght = strlen($username);
if ( !($user_lenght >= 3 && $user_lenght <= 5) ) {
 echo "Invalid Username";
} else {
    echo "Valid Username";
}

?>