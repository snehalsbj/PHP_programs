<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To print table of given number in PHP</title>
</head>
<body>
    <h1>Multiplication Table</h1>
    <table border="1">
        <tr>
            <th>Result</th>
        </tr>
        <?php
            $number = 10; 
            for ($i = 1; $i <= 10; $i++) {
                $result = $number * $i;
                echo "</td><td>$result</td></tr>";
            }
        ?>
    </table>
</body>
</html>