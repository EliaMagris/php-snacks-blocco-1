<!--Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.-->

<?php

$array = [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'vote' => [7, 8, 8, 5, 7, 4]
    ],
    [
        'name' => 'Carlo',
        'lastname' => 'Tonin',
        'vote' => [7, 4, 8, 8, 2, 4]
    ],
    [
        'name' => 'Alberto',
        'lastname' => 'Biggiogero',
        'vote' => [7, 4, 8, 8, 2, 4]
    ]
];

for ($i = 0; $i < count($array); $i++){

    $mediaVoti = array_sum($array[$i]['vote']) / count($array[$i]['vote']);

    echo $array[$i]['name'] . '-' . $array[$i]['lastname']. ":" .'la media dei voti è'. ':' .$mediaVoti;
    echo "<br>";
}


    ?>