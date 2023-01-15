<?php
include_once "../src/models/geocoding.php";
include_once "../src/models/weathercodeImg.php";


$cityGeocoding = new Geocoding($city);
// echo "<pre>";
// print_r($cityGeocoding);
// echo "</pre>";

$longitude = $cityGeocoding ->getLongitude();

$latitude =  $cityGeocoding->getLatitude();

