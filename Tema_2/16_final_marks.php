<?php
$alumnos = array(
    "Fernández Gil, María" => array(8, 9, 7),
    "Pérez Sánchez, Juan" => array(6, 5, 8)
);

function changename($badname) {
    $parts = explode(", ", $badname); 
    return $parts[1] . " " . $parts[0]; 
}

foreach ($alumnos as $badname => $notes) {
    $goodname = changename($badname);
    
    $proyect = $notes[0] * 0.35;
    $activity = $notes[1] * 0.15;
    $exam = $notes[2] * 0.50;
    $finalnote = $proyect + $activity + $exam;
    
    echo "<li>", $goodname, " have", $finalnote, " of final note .</li>";
}

?>