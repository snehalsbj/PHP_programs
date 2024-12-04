<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To print fibonacci series in PHP</title>
</head>
<body>
    <?php
    $number=3;
    $fibonacci=[0,1];
    for ($i= 2; $i<=$number; $i++) {   
        $fibonacci[$i] = $fibonacci[$i-1]+$fibonacci[$i-2];  
    }
    echo"Fibonacci series up to $number : ";
    foreach ($fibonacci as $number) {
        echo $number."";
    }
    ?>
</body>
</html>
