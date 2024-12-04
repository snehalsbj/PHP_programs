<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To print if the year is leap or not in PHP</title>
</head>
<body>
    <?php
    $year=2015;
    if(($year%4==0&&$year%100!=0||$year%400==0)){
        echo"$year is a leap year.\n";
    }else{
        echo "$year is not leap year \n";
    }
    ?>
</body>
</html>