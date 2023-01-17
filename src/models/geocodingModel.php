<?php

class Geocoding 
{
    private  $city;
    private  $latitude;
    private  $longitude;

    public function __construct($city)
    {
        $this->city = $city;   
    }

    /**
     * function that does a request to the API open meteo and initialize the latitude and longitude */ 
    function requestOMLocalisation(){
        $json_data = file_get_contents("https://geocoding-api.open-meteo.com/v1/search?name=" . $this->city);
        $decodeData = json_decode($json_data);

        $this->latitude = $decodeData->results[0]->latitude;
        $this->longitude = $decodeData->results[0]->longitude;
    }
    
    /**
     * @return latitude of the country
     */
    function getLatitude ()
    {
        return $this->latitude;
    }
    /**
     * @return longitude of the country
     */
    function getLongitude ()
    {
        return $this->longitude;
    }
}