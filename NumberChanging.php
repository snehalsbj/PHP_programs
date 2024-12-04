<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number CHanging Pattern in PHP</title>
</head>
<body>
    <?php
    $n=6;
    $currentNumber = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo $currentNumber . " ";
            $currentNumber++;
        }
        echo "<br>"; 
    }
    ?>
</body>
</html>
