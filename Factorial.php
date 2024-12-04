<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To print factor of given number in PHP</title>
</head>
<body>
<?php
        $number = 5; 
        if ($number < 0) {
            echo "Factorial not defined for negative numbers.";
        } elseif ($number == 0) {
            echo "Factorial of 0 is: 1";
        } else {
            $result = 1;
            for ($i = 1; $i <= $number; $i++) { 
                $result *= $i;
            }
            echo "Factorial of $number is: $result";
        }
    ?>
</body>
</html>