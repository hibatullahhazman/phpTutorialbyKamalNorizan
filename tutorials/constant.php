<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>
<body>
    <?php 
        define('PI', 3.14);
        echo PI.'<br>';
        
        define('cars', [
            'Alfa Romeo',
            'BMW',
            'Toyota'
        ]);

        echo cars[0].'<br>';
    ?>
</body>
</html>