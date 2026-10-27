<?php
$palabra = "reconocer";
$invertida = strrev($palabra); 

if ($palabra == $invertida) {
    echo "La palabra ", $palabra, " es un palindromo.";
} else {
    echo "La palabra ", $palabra, " NO es un palindromo.";
}
?>