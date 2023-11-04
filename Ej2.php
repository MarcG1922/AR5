<?php

$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$countryArray = explode(',', $country);
$capitals = [];

foreach ($countryArray as $countryName) {
    $capitals[] = ['country' => $countryName];
}

var_dump($capitals);
?>