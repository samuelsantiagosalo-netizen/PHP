<?php
$matriz1 = array(
    array(1, 2, 3, 4, 5),
    array(6, 7, 8, 9, 10),
    array(11, 12, 13, 14, 15),
    array(16, 17, 18, 19, 20),
    array(21, 22, 23, 24, 25)
);
$matriz2 = array(
    array(1, 1, 1, 1, 1),
    array(2, 2, 2, 2, 2),
    array(3, 3, 3, 3, 3),
    array(4, 4, 4, 4, 4),
    array(5, 5, 5, 5, 5)
);

function transpuesta($m) {
    $resultado = array();
    for ($fila = 0; $fila < 5; $fila++) {
        for ($col = 0; $col < 5; $col++) {
            $resultado[$col][$fila] = $m[$fila][$col];
        }
    }
    return $resultado;
}

function sumarMatrices($m1, $m2) {
    $resultado = array();
    for ($fila = 0; $fila < 5; $fila++) {
        for ($col = 0; $col < 5; $col++) {
            $resultado[$fila][$col] = $m1[$fila][$col] + $m2[$fila][$col];
        }
    }
    return $resultado;
}
echo "Matrices calculadas correctamente.";
?>