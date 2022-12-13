<!--Snack 5
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.-->

<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .teachers {
            background-color: lightgray;
        }

        .pm {
            background-color: green;
        }
    </style>

    <?php
    foreach ($db as $key => $value) {
        echo "<div class='$key'>";
        foreach ($value as $person) {
            echo "<p>" . $person['name'] . " " . $person['lastname'] . "</p>";
        }
        echo "</div>";
    }
    ?>


</body>

</html>