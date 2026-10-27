<?php
    $h = date("H");

    if ($h < "12") {
        echo "<p>Good morning</p>";
    }
    elseif ($h < "22") {
        echo "<p>Good afternoon</p>";
    }
    else {
        echo "<p>Good night</p>";
    }
?>
