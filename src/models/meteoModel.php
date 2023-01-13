<?php
class Meteo {
    public function __construct($latitude, $longitude) {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $json_data = file_get_contents("https://api.open-meteo.com/v1/dwd-icon?latitude=" . $this->latitude . "&longitude=" . $this->longitude . "&hourly=temperature_2m,relativehumidity_2m,weathercode&daily=weathercode,temperature_2m_max,temperature_2m_min,windspeed_10m_max&timezone=auto&start_date=2023-01-12&end_date=2023-01-15");
        $this->data = json_decode($json_data);
    }
    getHourlyTemp(){
        return $this->data->hourly->temperature_2m;
    }
    getHourlyHumidity(){
        return $this->data->hourly->relativehumidity_2m;
    }
    getHourlyWeathercode(){
        return $this->data->hourly->weathercode;
    }
    getDailyMinTemp(){
        return $this->data->daily->temperature_2m_min;
    }
    getDailyMaxTemp(){
        return $this->data->daily->temperature_2m_max;
    }
    getDailyWeathercode(){
        return $this->data->daily->weathercode;
    }
    getDailyWindSpeed(){
        return $this->data->daily->windspeed_10m_max;
    }
}
?>