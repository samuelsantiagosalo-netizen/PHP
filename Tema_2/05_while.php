<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios con do while</title>
</head>
<body>
    <h2>1) Números pares del 50 al 80</h2>
    <?php
    $i = 50;
    while ($i <= 80){
        echo $i;
        if ($i < 80) {
        echo ", ";
        }
        $i+=2;
    } ;
    ?>

    <h2>2) Enteros del 17 al -17</h2>
    <?php
    $i = 17;
    while ($i >= -17) {
        echo $i;
        if ($i > -17) {
            echo ", ";
        }
        $i--;
    } ;
    ?>

    <h2>3) Tabla de multiplicar del 6</h2>
    <?php
    $i = 1;
    while ($i <= 10) {
        echo "6 x " , $i , " = " , (6 * $i) , "<br>";
        $i++;
    } ;
    ?>
</body>
</html>
