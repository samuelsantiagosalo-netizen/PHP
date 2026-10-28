<?php
$text = "hola pedro hola juan hola maria";
$search = "hola";

$parts = explode($search, $text); 
$times = count($parts) - 1; 

echo "The word '", $search, "' shows ", $times, " times.";
?>