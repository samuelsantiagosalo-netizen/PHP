<?php
$temperatures = array (
    array(1, 12, 26),
    array(2, 11, 24),
    array(3, 15, 24),
    array(4, 10, 28)
);
$maximaMasAlta = 0;
$diaDeMaxima = 0;

for ($fila = 0; $fila < 4; $fila++) {
    $maximaDelDia = $temperatures[$fila][2]; 
    if ($maximaDelDia >= $maximaMasAlta) {
        $maximaMasAlta = $maximaDelDia;
        $diaDeMaxima = $temperatures[$fila][0]; 
    }
}
echo "El ultimo dia con la temperatura mas alta fue el dia ", $diaDeMaxima, " con ", $maximaMasAlta, " grados.";
?>