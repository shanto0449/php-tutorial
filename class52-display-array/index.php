<?php
declare(strict_types=1);
$user_name = ["Shanto", "Hossen", 200,true,45.20,false];

print_arr($user_name);

function dumo_arr(array $arr): void {
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
}

function print_arr(array $arr) : void {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}



?>