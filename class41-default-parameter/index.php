<?php
function full_name($first_name , $last_name , $separator = ''){
  echo $first_name . $separator . $last_name;
}
full_name("Hello" , "Shanto", "===");

echo "<br>";
function multiply($first_name , $second_name = 3){
    echo $first_name * $second_name;
}
multiply(2);

?>