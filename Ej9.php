<?php

$data = [
    ['nombre' => 'Chastity Mcgowan', 'edad' => 77, 'gustos' => 'desserts, noodles'],
    ['nombre' => 'Raven Olsen', 'edad' => 73, 'gustos' => 'all kinds of food'],
    ['nombre' => 'Quamar Powers', 'edad' => 40, 'gustos' => 'pasta, seafood'],
    ['nombre' => 'Yoko Edwards', 'edad' => 55, 'gustos' => 'sandwiches'],
    ['nombre' => 'Martena Weaver', 'edad' => 65, 'gustos' => 'cereals, stews, pasta'],
];

$usuarios_sin_preferencias = 0;
$suma_edades = 0;

foreach ($data as $usuario) {
    if (empty($usuario['gustos'])) {
        $usuarios_sin_preferencias++;
        $suma_edades += $usuario['edad'];
    }
}

$edad_media = $usuarios_sin_preferencias > 0 ? $suma_edades / $usuarios_sin_preferencias : 0;

echo "Total de personas sin preferencias: $usuarios_sin_preferencias\n";
echo "Edad promedio de personas sin preferencias: $edad_media";
?>