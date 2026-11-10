<?php
$a=0;
$b=1;

echo $a . ", " . $b;

for ($i = 2; $i < 20; $i++) {
    $nextNum = $a  + $b;
    echo ", " . "nextNum";
    $a = $b;
    $b = $nextNum;
}
?>