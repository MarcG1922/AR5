
<?php

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires,Cairo,London";

$cityArray = explode(',', $city);

$capitals = [];
foreach ($cityArray as $cityName) {
    $capitals[] = ['city' => $cityName];
}

var_dump($capitals);

?>