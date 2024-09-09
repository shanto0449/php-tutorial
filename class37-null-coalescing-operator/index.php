<?php
   $name_val = isset($my_name) ? $my_name : "Shanto";
   echo $name_val;
?>


<?php
// $my_name = "Shanto";
//Nul coalescing
$name_val = $my_name ?? "raj";
echo $name_val;
?>