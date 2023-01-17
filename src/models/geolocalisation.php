<?php

Class Geolocalisation
{

    private float $latitude;
    private float $longitude;

    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;   
    }

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