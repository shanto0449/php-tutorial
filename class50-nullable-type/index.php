<?php
declare(strict_types=1);
function print_my_name(?string $full_name){
    echo $full_name;
}

$name = null;
print_my_name($name);
?>