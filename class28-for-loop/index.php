<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php 
        for ( $user_count =1; $user_count <= 50; $user_count++){

        ?>
        <li>User <?php echo $user_count ?></li>
        <?php

    }
    ?>
        
    </ul>
</body>
</html>