<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number increasing Pattern in PHP</title>
</head>
<body>
    <?php
    $n=6;
    for($i=1;$i<=$n;$i++){
        for($j= 1;$j<=$i;$j++){
            echo $j . "";
        }
        echo "<br>"; 
    }
    ?>
</body>
</html>
