<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    for($x=0;$x<=10;$x++){
        echo $x ;
        if($x<10){
        echo ",";
        }
    }
        for ($x2=-17; $x2<=17; $x2++) {
        echo  " ", $x2 , " ";
    }
    for ($x3 = 0 ; $x3<=60; $x3= $x3 + 6) {
        echo " ", $x3 , " ";
    }
    ?>
    
</body>
</html>

