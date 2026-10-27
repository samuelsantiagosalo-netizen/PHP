<?php
$texto = "hola pedro hola juan hola maria";
$buscar = "hola";

$trozos = explode($buscar, $texto); 
$veces = count($trozos) - 1; 

echo "La palabra '", $buscar, "' aparece ", $veces, " veces.";
?>