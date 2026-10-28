<?php
$word = "reconocer";
$reverse = strrev($word); 

if ($word == $reverse) {
    echo "The word ", $word, " is a  palindrome.";
} else {
    echo "The word ", $word, " ins't a palindrome.";
}
?>


