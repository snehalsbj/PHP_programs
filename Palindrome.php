<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Check if a Given Number is a Palindrome in PHP</title>
</head>
<body>
    <?php
        $a = 125; 
        $originalNumber = $a;
        $reversedNumber = 0;

        while ($a > 0) {
            $digit = $a % 10; 
            $reversedNumber = ($reversedNumber * 10) + $digit; 
            $a = (int)($a / 10); 
        }

        if ($originalNumber === $reversedNumber) {
            echo "$originalNumber is a palindrome number.";
        } else {
            echo "$originalNumber is not a palindrome number.";
        }
    ?>
</body>
</html>
