<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php $games = [
    ['squadraCasa' => 'catanzaro', 'squadraOspite' => 'roma', 'puntiCasa' => 20, 'puntiOspite' => 30],
    ['squadraCasa' => 'bari', 'squadraOspite' => 'genova', 'puntiCasa' => 40, 'puntiOspite' => 10],
    ['squadraCasa' => 'milano', 'squadraOspite' => 'cagliari', 'puntiCasa' => 20, 'puntiOspite' => 60]
];

for ($i = 0; $i < count($games); $i++) {
    echo $games[$i]['squadraCasa'] . '-' . $games[$i]['squadraOspite'] . '-' . $games[$i]['puntiCasa'] . '-' . $games[$i]['puntiOspite'];
}

?>