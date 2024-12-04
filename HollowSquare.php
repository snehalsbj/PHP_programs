<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hollow Square Pattern</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            white-space: pre; 
        }
    </style>
</head>
<body>
    <?php
    $n = 5; 
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == 0 || $i == $n - 1 || $j == 0 || $j == $n - 1) {
                echo "* "; 
            } else {
                echo "  "; 
            }
        }
        echo "<br>"; 
    }
    ?>
</body>
</html>
