<?php

$data = [
    ['nombre' => 'Chastity Mcgowan', 'pais' => 'Spain', 'gustos' => 'desserts, noodles'],
    ['nombre' => 'Raven Olsen', 'pais' => 'Spain', 'gustos' => 'all kinds of food'],
    ['nombre' => 'Quamar Powers', 'pais' => 'Spain', 'gustos' => 'pasta, seafood'],
    ['nombre' => 'Yoko Edwards', 'pais' => 'Japan', 'gustos' => 'sandwiches'],
    ['nombre' => 'Martena Weaver', 'pais' => 'Spain', 'gustos' => 'cereals, stews, pasta'],
    ['nombre' => 'Byron York', 'pais' => 'Spain', 'gustos' => 'pasta']
];

$pais_buscado = 'Spain'; //es pot ficar altre pais si vols

echo "People from $pais_buscado\n";
echo "-----------------------------\n";
foreach ($data as $usuario) {
    if ($usuario['pais'] == $pais_buscado) {
        echo $usuario['nombre'] . ' likes ' . $usuario['gustos'];
    }
}
?>