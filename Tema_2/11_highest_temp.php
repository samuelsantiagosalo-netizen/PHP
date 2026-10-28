<?php
$temperatures = array (
    array(1,12,26),
    array(2,11,28),
    array(3,15,24)
);

$max_temp = $temperatures[0][2];
$last_day = $temperatures[0][0];

for ($day = 1; $day < count($temperatures); $day++) {
    if ($temperatures[$day][2] > $max_temp) {
        $max_temp = $temperatures[$day][2];
        $last_day = $temperatures[$day][0];
    }
}

echo "<p>The last day with the maximum temperature was ", $last_day , " with ", $max_temp, " degrees.</p>";
?>