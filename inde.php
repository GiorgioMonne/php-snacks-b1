<?php

// Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

// Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


    $partite = [
        [
            "sCasa" => "Olimpia Milano",
            "sOspite" => "Cantù",
            "pCasa" => "88",
            "pOspite" => "74"
        ],
        [
            "sCasa" => "Virtus Segafredo Bologna",
            "sOspite" => "Allianz Pallacanestro Trieste",
            "pCasa" => "88",
            "pOspite" => "74"
        ],
        [
            "sCasa" => "Dolomiti Energia Trentino",
            "sOspite" => "Bertram Derthona Basket Tortona",
            "pCasa" => "88",
            "pOspite" => "74"
        ],
        [
            "sCasa" => "Germani Brescia",
            "sOspite" => "GeVi Napoli Basket",
            "pCasa" => "88",
            "pOspite" => "74"
        ],
        [
            "sCasa" => "Happy Casa Brindisi",
            "sOspite" => "Banco di Sardegna Sassari",
            "pCasa" => "88",
            "pOspite" => "74"
        ],
        [
            "sCasa" => "Umana Reyer Venezia",
            "sOspite" => "UNAHOTELS Reggio Emilia",
            "pCasa" => "88",
            "pOspite" => "74"
        ],
        [
            "sCasa" => "Carpegna Prosciutto Pesaro",
            "sOspite" => "NutriBullet Treviso Basket",
            "pCasa" => "88",
            "pOspite" => "74"
        ],
        [
            "sCasa" => "Fortitudo Kigili Bologna",
            "sOspite" => "Openjobmetis Varese",
            "pCasa" => "88",
            "pOspite" => "74"
        ]
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizzi di allenamento php</title>
</head>
<body>

    <h2>Lista Partite Serie A</h2>

    <ul>

        <?php for($i =0; $i < count($partite); $i++){

                echo "<li>  {$partite[$i]["sCasa"]} - {$partite[$i]["sOspite"]} | {$partite[$i]["pCasa"]} - {$partite[$i]["pOspite"]} </li>";
            } 
        ?>

    </ul>
    
</body>
</html>