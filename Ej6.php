
<?php

$data = [
    ['nombre' => 'Neville Marks', 'edad' => 77],
    ['nombre' => 'Laurel Buckner', 'edad' => 73],
    ['nombre' => 'Zia Bullock', 'edad' => 25]
    
];

foreach ($data as $usuario) {
    echo $usuario['nombre'] . ' tiene ' . $usuario['edad'] . ' años';
}
?>