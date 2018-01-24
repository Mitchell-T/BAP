<?php

// define variables
$naam = $_POST['naam'];
$leeftijd = $_POST['leeftijd'];
$hobby = $_POST['hobby'];

// print the text
echo "Jouw naam is $naam.";
echo "<br>je woont in $leeftijd.";
echo "<br>Je hobby is $hobby.";
echo "<br><br>";

// if statement(s)
if ($leeftijd == 17) {
    echo "<br>hey jij bent ook 17";
} else if ($leeftijd < 17) {
    echo "HA JIJ BENT JONGER";
} else {
    "je bent ouder dan mij :";
}
