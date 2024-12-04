<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Pattern in PHP</title>
</head>
<body>
    <?php
    $n=6;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            echo "&nbsp;"; 
        }
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "*"; 
        }
        echo "<br>"; 
    }
    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = $n; $j > $i; $j--) {
            echo "&nbsp;"; 
        }
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "*"; 
        }
        echo "<br>"; 
    }
    ?>
</body>
</html>
