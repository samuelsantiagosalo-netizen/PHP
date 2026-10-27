<?php
$alumnos = array(
    "Fernández Gil, María" => array(8, 9, 7),
    "Pérez Sánchez, Juan" => array(6, 5, 8)
);

function arreglarNombre($nombreMalo) {
    $partes = explode(", ", $nombreMalo); 
    return $partes[1] . " " . $partes[0]; 
}

echo "<ul>";
foreach ($alumnos as $nombreMalo => $notas) {
    $nombreBueno = arreglarNombre($nombreMalo);
    
    $proyecto = $notas[0] * 0.35;
    $actividad = $notas[1] * 0.15;
    $examen = $notas[2] * 0.50;
    $notaFinal = $proyecto + $actividad + $examen;
    
    echo "<li>", $nombreBueno, " tiene un ", $notaFinal, " de nota final.</li>";
}
echo "</ul>";
?>