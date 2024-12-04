<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To print reverse of given number in PHP</title>
</head>
<body>
    <?php
    $a=7894;
    $reversedNumber=0;
    while($a>0) {
        $digit=$a%10;
        $reversedNumber=($reversedNumber * 10)+$digit;
        $a=(int)($a/10);
    }
    echo"Reversed number: $reversedNumber";
    ?>
</body>
</html>
