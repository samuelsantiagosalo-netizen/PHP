<?php
$cine = array(
    "Peli A" => array("Sesion 1" => 40, "Sesion 2" => 50, "Sesion 3" => 60),
    "Peli B" => array("Sesion 1" => 10, "Sesion 2" => 20, "Sesion 3" => 30)
);

echo "<h3>Audiencia por pelicula:</h3>";
foreach ($cine as $peli => $sesiones) {
    $totalPeli = 0;
    foreach ($sesiones as $espectadores) {
        $totalPeli += $espectadores;
    }
    echo "La ", $peli, " tuvo ", $totalPeli, " espectadores.<br>";
}

echo "<h3>Audiencia por sesion:</h3>";
$totalS1 = 0; $totalS2 = 0; $totalS3 = 0;
foreach ($cine as $peli => $sesiones) {
    $totalS1 += $sesiones["Sesion 1"];
    $totalS2 += $sesiones["Sesion 2"];
    $totalS3 += $sesiones["Sesion 3"];
}
echo "Sesion 1: ", $totalS1, "<br>Sesion 2: ", $totalS2, "<br>Sesion 3: ", $totalS3, "<br>";
?>