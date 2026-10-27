<?php
$finde = array(
    "Viernes" => array(
        "Peli A" => array(40, 50, 60),
        "Peli B" => array(10, 20, 30)
    ),
    "Sabado" => array(
        "Peli A" => array(50, 60, 70),
        "Peli B" => array(20, 30, 40)
    )
);

$totalFinde = 0;
foreach ($finde as $dia => $pelis) {
    foreach ($pelis as $nombrePeli => $sesiones) {
        foreach ($sesiones as $espectadores) {
            $totalFinde += $espectadores;
        }
    }
}
echo "La audiencia total del fin de semana fue de ", $totalFinde, " personas.";
?>