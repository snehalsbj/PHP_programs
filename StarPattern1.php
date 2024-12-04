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
    for($i=$n;$i>0;$i--){
        for($j= 0;$j<$i;$j++){
            echo "*";
        }
        echo "<br>"; 
    }
    ?>
</body>
</html>
