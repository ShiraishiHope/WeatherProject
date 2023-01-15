<?php

class Geocoding 
{
    private $city;
    public $decodeData;

    public function __construct($city)
    {
        $this->city = $city;
        $json_data = file_get_contents 
        (
            "https://geocoding-api.open-meteo.com/v1/search?name=" . $this->city
        );
        $this->decodeData = json_decode($json_data);
    }
    function getLongitude ()
    {
        return
        $this->decodeData->results[0]->longitude;
    }
    function getLatitude ()
    {
        return
        $this->decodeData->results[0]->latitude;
    }


}