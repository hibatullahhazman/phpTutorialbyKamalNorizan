<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <h1>While</h1>
    <?php
        $i = 0;
        while($i<10){
            echo $i.'<br>';
            $i++;
        }
    ?>
    <h1>do...while</h1>
    <?php
        $i = 0;
        do{
            echo $i.'<br>';
            $i++;
        }while($i<10);
    ?>
    <h1>for</h1>
    <?php
        $colors = ['red','green','blue','yellow','pink','purple','orange','black','white','gray'];
        for($k=0;$k< sizeof($colors) ;$k++){
            // if($k==1){
            //     break;
            // }
            if($k==2){
                continue;
            }
            echo $colors[$k].'<br>';
            
        }
        echo $k;
    ?>
    <h1>foreach</h1>
    <?php
        $colors = ['red','green','blue'];
        foreach($colors as $key=>$color){
            echo $key.'-'.$color.'<br>';
        }
    ?>
</body>
</html>