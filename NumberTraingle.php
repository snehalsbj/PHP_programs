<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number traingle in PHP</title>
</head>
<body>
    <?php
    $n=6;
    for($i=0;$i<$n;$i++){
        for($j= 0;$j<=$i;$j++){
            echo $j . "";
        }
        echo "<br>"; 
    }
    ?>
</body>
</html>
