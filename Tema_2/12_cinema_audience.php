<?php

    $cinema=[
    array(1,62,56,53,35),
    array(2,71,44,54,36),
    array(3,15,24,45,34)
    ];
    echo "<table><caption>Number of spectators of each film and session</caption>";
    echo "<tr><th>Session</th><th>Film 1</th><th>Film 2</th><th>Film 3</th><th>Film 4</th></tr>";
    for ($ses = 0; $ses <  count($cinema); $ses++) {
        echo "<tr>";
        for ($film = 0; $film < count($cinema[0]); $film++) {
            echo "<td>", $cinema[$ses][$film],"</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>