<?php

$number = 7;

echo "<ul>";
for ($i= 1;$i <= $number/2; $i++) {
    if ($number % i == 0) {
        echo "<li>", $i ,"</li>";
    }
}

echo "</ul>"

?>