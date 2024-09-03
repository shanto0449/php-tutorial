<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello PHP</h1>
   <h1><?php  echo "Hello";?> PHP </h1>

   <?php  
   $total_amount =10;
   $first_name = "raj";

   echo "Hello $first_name , Your Amount is:$total_amount  ";
   ?> 

  <p>
  <?php 
    $first_name ="Rajdwip";
    $name = "first_name";
    echo $$name;
   ?>
  </p>

  <h1>Hello <?php echo $first_name ?> , Your Amount is <?php echo $total_amount?> </h1>

  <h2> Total amount is: <?php echo $total_amount ?></h2>

  <h3>Your name is: <?php echo $first_name ?></h3>

</body>   
</html>