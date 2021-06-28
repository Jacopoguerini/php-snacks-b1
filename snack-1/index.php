<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

    $westernFinals = [
        [
        "home" => "Phoenix Suns",
        "away" => "Los Angeles Clippers",
        "homePoints" => "120",
        "awayPoints" => "120"
        ],
        [
        "home" => "Phoenix Suns",
        "away" => "Los Angeles Clippers",
        "homePoints" => "104",
        "awayPoints" => "103"
        ],
        [
        "home" => "Los Angeles Clippers",
        "away" => "Phoenix Suns",
        "homePoints" => "106",
        "awayPoints" => "92"
        ]
    ]; 

    echo "<ul>";
    for ($i = 0; $i < count($westernFinals); $i++) {
        echo "<li>" . $westernFinals[$i]["home"] . " - " . $westernFinals[$i]["away"] . " | " . $westernFinals[$i]["homePoints"] . "-" . $westernFinals[$i]["awayPoints"] . "</li>";
    }
    echo "</ul>";

    $easternFinals = [
        [
        "home" => "Milwaukee Bucks",
        "away" => "Atlanta Hawks",
        "homePoints" => "113",
        "awayPoints" => "116"
        ],
        [
        "home" => "Milwaukee Bucks",
        "away" => "Atlanta Hawks",
        "homePoints" => "125",
        "awayPoints" => "91"
        ],
        [
        "home" => "Atlanta Hawks",
        "away" => "Milwaukee Bucks",
        "homePoints" => "113",
        "awayPoints" => "102"
        ]
    ]; 

    echo "<ul>";
    for ($i = 0; $i < count($easternFinals); $i++) {
        echo "<li>" . $easternFinals[$i]["home"] . " - " . $easternFinals[$i]["away"] . " | " . $easternFinals[$i]["homePoints"] . "-" . $easternFinals[$i]["awayPoints"] . "</li>";
    }
    echo "</ul>";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 1</title>
    </head>
    <body>
        
    </body>
</html>
