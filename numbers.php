<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    2, 256, -256, 10358 <br>
    <?php
        $myInt = 256;
        echo is_int($myInt).'<br>';
        echo is_integer($myInt).'<br>';
        echo is_long($myInt).'<br>';

        $myFloat = 10.5;
        echo is_float($myFloat).'<br>';

        $x = 1.9e411;
        echo $x.'<br>';

        $x = 7;
        $y = '845';
        var_dump(is_int($y)).'<br>';
        echo $x + $y.'<br>';

        $x = '7.7';
        $int_cast = (int)$x;
        $int_cast.'<br>';
    ?>
</body>
</html>
