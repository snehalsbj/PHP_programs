<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To check if number is prime or not in PHP</title>
</head>
<body>
    <h1>
    <?php
        $a=10;
        $isPrime=false;
        if($a<=1){
            $isPrime=false;
        }
        for($i= 2; $i<$a/2; $i++){
            if($a%$i==0){
                $isPrime=false;
                break;
            }
        }
        if($isPrime){
            echo"$a is Prime number";
        }else{
            echo "$a is not a Prime number";
        }
    ?>
    </h1>
</body>
</html>