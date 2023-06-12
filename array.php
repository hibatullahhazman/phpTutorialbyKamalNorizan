<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Indexed Array</h1>
    <?php
        $cars = array('Alfa Romeo', 'BMW', 'Toyota', 'Honda', 'Mercedes');
        echo '-------------------';
        $i =0;
        while($i < sizeof($cars)){
            echo $cars[$i].'<br>';
            $i++;
        }
        echo '-------------------';
        $i =0;
        do {
            echo $cars[$i].'<br>';
            $i++;
        } while ($i < sizeof($cars));
        echo '-------------------';
        for ($i=0; $i < sizeof($cars); $i++) { 
            echo $cars[$i].'<br>';
        }
        echo '-------------------';
        foreach($cars as $car){
            echo $car.'<br>';
        }
    ?>

    <h1>Associative Array</h1>

    <?php
        $ages = array('Hiba'=>32, 'Jannah'=>34, 'Azrul'=>37, 'Huda'=>27);

        foreach($ages as $name=>$age){
            echo $name.'-'.$age.'<br>';
        }
    ?>
</body>
</html>