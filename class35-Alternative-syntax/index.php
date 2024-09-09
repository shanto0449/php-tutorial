<?php
// if (condition){

// } else if(){

// } else{

// }

//Alternative
if (false):
    echo "Hello";
elseif (true):
   echo  "Shanto";
else:
    echo "Bye";

endif;




?>

<?php if (false): ?>
    <h1>Hello</h1>
<?php elseif (true) : ?>
    <h1>Hello2</h1>
<?php else: ?>
    echo"Bye";
<?php endif; ?>

<?php for ($count = 1; $count <= 10; $count++):?>
    <h1>Hallo <?php echo $count ?></h1>
<?php endfor ;?>