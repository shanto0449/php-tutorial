<?php
declare(strict_types=1);
function sum(float|int $val1, float|int $val2) :int|float{
    return $val1 + $val2;

}
echo sum(20,50);
?>