<?php
$weekend = [
    array(
        array(40, 50, 60),
        array(10, 20, 30),
        array(25, 35, 45),
        array(15, 10, 20)
    ),
    array(
        array(50, 60, 70),
        array(20, 30, 40),
        array(45, 55, 65),
        array(30, 25, 35)
    ),
    array(
        array(60, 70, 80),
        array(30, 40, 50),
        array(55, 65, 75),
        array(40, 35, 45)
    )
];

$totalweekend = 0;

foreach ($weekend as $day => $films) {
    foreach ($films as $namefilm => $session) {
        foreach ($session as $watchers) {
            $totalweekend += $watchers;
        }
    }
}

echo "The total audience of the weekend was " . $totalweekend . " people.";
?>
