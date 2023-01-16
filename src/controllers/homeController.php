<?php
include_once "../src/models/geocodingModel.php";
include_once "../src/models/meteoModel.php";


$cityGeocoding= new Geocoding($city);
$cityGeocoding->requestOMLocalisation();

echo "<pre>";
print_r($cityGeocoding);
echo "</pre>";

echo $cityGeocoding->getLatitude();

$meteoCity = new Meteo();
$meteoCity->requestAPI($cityGeocoding);



echo "<pre>";
print_r($meteoCity);
echo "</pre>";
