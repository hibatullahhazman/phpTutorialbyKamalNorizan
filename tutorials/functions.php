<?php
    function ageCount($age) {
        echo 'Your age is '.$age.'<br>';
    }

    function addNumbers($num1=10, $num2=15) {
        return $num1 + $num2;
    }

    function addNumbersWithType($num1=10, $num2=15) : int {
        return $num1 + $num2;
    }

    ageCount(32);
    addNumbersWithType(32,35);

    echo addNumbers(2, 3).'<br>';
    echo addNumbers(15,15).'<br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    
</body>
</html>