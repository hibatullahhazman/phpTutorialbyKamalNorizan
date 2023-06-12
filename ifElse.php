<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If....Else</title>
</head>
<body>
    <?php
        if(1==1 and 2!=1){
            echo 'Hello World<br>';
        }

        if(1==1 and 2==1){
            echo 'Hello World<br>';
        }else{
            echo 'Hello PHP<br>';
        }

        if(1==1 and 2==1){
            echo 'Hello World<br>';
        }elseif(1==1 and 2!=1){
            echo 'Hello PHP<br>';
        }else{
            echo 'Hello HTML<br>';
        }
        
    ?>
</body>
</html>