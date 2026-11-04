<?php

function bisiesto($year) {

    if ($year % 400 == 0 || 
       ($year % 4 == 0 && $year % 100 != 0)) {

        return "The year $year is bisiesto.";

    } else {

        return "The year $year is not bisiesto.";
    }
}

echo bisiesto(2010);

?>