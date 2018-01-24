<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 3</title>
</head>
<body>
<?php
$voornaam = 'Mitchell';
$achternaam = 'Tuinstra';
$leeftijd = '17';
$woonplaats = 'Velsen-Noord';
$hobby = 'Gamen';

echo "<h1>Mijn naam is $voornaam $achternaam</h1>";
echo "<p>Ik woon in $woonplaats en mijn hobby is $hobby";

if ($leeftijd >= 18) {
    echo '<p>Je bent oud genoeg voor alcohol want je bent ' . $leeftijd . '.</p>';
} else {
    echo '<p>Je bent niet oud genoeg voor alcohol want je bent ' . $leeftijd . '.</p>';
}

?>
</body>
</html>