<?php
function sum(){
    $first_number = 10;
    $second_number = 20;
    global $result;
    $result = $first_number + $second_number;

    // echo $result;
}
sum();

echo $result;
?>