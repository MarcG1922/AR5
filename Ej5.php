<?php

$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";
$dataArray = explode('; ', $data);
$capitals = [];

foreach ($dataArray as $item) {
    list($city, $country) = explode(', ', $item);
    $capitals[] = [
        'city' => $city,
        'country' => $country
    ];
}

var_dump($capitals);
?>