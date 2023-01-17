<?php
include_once "../src/models/geocodingModel.php";
include_once "../src/models/meteoModel.php";
include_once "../src/models/weathercodeImgModel.php";

$city="Lyon";
$cityGeocoding= new Geocoding($city);
$cityGeocoding->requestOMLocalisation();
$meteoCity = new Meteo();
$meteoCity->requestAPI($cityGeocoding);

