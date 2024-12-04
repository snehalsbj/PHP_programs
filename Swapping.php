<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To swap the two numbers in PHP</title>
</head>
<body>
    <?php
    $a=10;
    $b=20;
    echo"Before swapping a=$a,b=$b\n";
    $temp=$a;
    $a=$b;
    $b=$temp;
    echo"After swapping a=$a,b=$b\n";
    ?>
</body>
</html>
