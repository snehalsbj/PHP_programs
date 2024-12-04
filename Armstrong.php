<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To print given number is armstrong or not in PHP</title>
</head>
<body>
    <?php
       $a=153;
       $sum=0;
       $digits=strlen((string)$a);
       $temp=$a;
       for ($i= 0; $i<$digits; $i++) {
        $digit=$temp%10;
        $sum+=pow($digit,$digits);
        $temp=(int)($temp/10);
       }
       if($sum == $a){
        echo"$a is an Armstrong number";
       }else{
        echo "$a is not an Armstrong number";
       }
    ?>
</body>
</html>