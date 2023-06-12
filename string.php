<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php 
        $myString = 'Hello World';
        echo strlen($myString).'<br>';
        echo str_word_count($myString).'<br>';
        echo strrev($myString).'<br>';
        echo strpos($myString, 'World').'<br>';
        echo $myString[strpos($myString, 'World')].'<br>';
        $myString = str_replace('World', 'PHP', $myString);
        echo $myString.'<br>';
        echo strtolower($myString).'<br>';
        echo strtoupper($myString).'<br>';
        echo ucfirst(strtolower($myString)).'<br>';
        echo ucwords(strtolower($myString)).'<br>';
        echo 'Welcome, '.$myString;
    ?>
</body>
</html>
