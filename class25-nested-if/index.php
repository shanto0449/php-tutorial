<?php
$username = "raj";
$password = "123";

if ($username == 'raj' && $password == 1234){
    echo "Hello User";
}else {
    echo "Invalid Username / Password";
}

echo "<br>";

if ($username == 'raj'){
    if( $password == 123){
        echo "Hello User";

    }else {
        echo "Invalid Pasword";
    }

}else {
    echo "Invalid Username";
}

echo "<br>";

if ( $username == 'raj' && $password == 1234){
   echo "Hello User";
} else if ( $username == 'abcd' && $password != 1234){
    echo " Invalid Username";
} else if ( $password == 123 && $username != 'abcd' ){
    echo "invalid Password";
} else {
    echo "Invalid Username / Password";
}

?>