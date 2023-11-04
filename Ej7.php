<?php

$data = [
    ['nombre' => 'Neville Marks', 'edad' => 77],
    ['nombre' => 'Lillith Herring', 'edad' => 62],
    ['nombre' => 'Laurel Buckner', 'edad' => 73],
    ['nombre' => 'Aileen Kemp', 'edad' => 53],
    ['nombre' => 'Zia Bullock', 'edad' => 25],
    ['nombre' => 'Alfonso Mcfarland', 'edad' => 40]
];

foreach ($data as $usuario) {
    $edad = $usuario['edad'];
    if ($edad >= 35 && $edad <= 65) {
        echo $usuario['nombre'] . ' tiene ' . $edad . ' años';
    }
}
?>