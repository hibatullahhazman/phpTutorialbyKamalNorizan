<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
        $favColor = $_GET['color'] ?? 'green';
        
        // $favColor = 'green';
        // if(isset($_GET['color'])){
        //     $favColor = $_GET['color'];
        // }

        switch($favColor){
            case 'red':
                echo 'Your favorite color is red';
                break;
            case 'blue':
                echo 'Your favorite color is blue';
                break;
            case 'green':
                echo 'Your favorite color is green';
                break;
            default:
                echo 'Your favorite color is something else';
        }
    ?>
</body>
</html>