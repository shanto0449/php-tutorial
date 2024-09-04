<?php
$name ="shanto";
$school="tast1";
$address="test2";
$new_name = ucwords($name);
// echo "Hello $name"
printf("Hello PHP");
echo "<br>";
printf("hello %s My school Name : %s My address is:%s",ucwords($name),$school,$address); 

echo "<br>";

$html_block ="<div>
<h1>Shanto <h1>
<h2> Hosen<h2>
<div>";

echo $html_block;

echo "<br>";

$first_name="shanto";
$last_name="hosen";

$html_block ="<div>
<h1>".ucwords($first_name)."<h1>
<h2> ".ucwords($last_name)."<h2>
<div>";
echo $html_block;

?>

<?php
$first_name="shanto";
$last_name="hosen";

$html_block ="<div>
<h1>%s<h1>
<h2>%s<h2>
<div>";

printf($html_block,ucwords($first_name) ,ucwords($last_name) );
?>