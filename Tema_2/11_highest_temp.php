<?php
$temperatures = array (
    array(1, 12, 26),
    array(2, 11, 24),
    array(3, 15, 24),
    array(4, 10, 28)
);
$max_temps = $temperatures[0][2];
$last_day = $temperatures[0][0];

for ($day = 1; $day < count($temperatures); $day++) {
    if ($temperatures[$day][2] >= $max_temps) {
        $maxtemps = $temperatures[$day][2];
        $last_day = $temperatures[$day][0]; 
    }
}
echo "The last day with maximun tempertature was ", $last_day, " with ", $max_temps, " degres.";
?>