
<?php

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$cityArray = explode(',', $city);
$countryArray = explode(',', $country);
$capitals = [];

for ($i = 0; $i < count($cityArray); $i++) {
    $capitals[] = [
        'country' => $countryArray[$i],
        'city' => $cityArray[$i]
    ];
}

var_dump($capitals);
?>