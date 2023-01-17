<?php
class Meteo {
    public $hourlyTemperature;
    public $hourlyHumidity;
    public $hourlyWeathercode;
    public $dailyMinTemperature;
    public $dailyMaxTemperature;
    public $dailyWeathercode;
    public $dailyWindSpeed;
    public $today;
  
    public function __construct() {
        
       
    }
    //Method to get the json file from the API, decode it, and then organize the data
    function requestAPI(object $class){
        $today = date('Y-m-d');
        $lastDay = date('Y-m-d',strtotime($today.'+6 days'));
        $openMeteoJson = file_get_contents("https://api.open-meteo.com/v1/dwd-icon?latitude=" . $class->getLatitude() . "&longitude=" . $class->getLongitude() . "&hourly=temperature_2m,relativehumidity_2m,weathercode&daily=weathercode,temperature_2m_max,temperature_2m_min,windspeed_10m_max&timezone=auto&start_date=".$today."&end_date=".$lastDay);
        $openMeteoObject = json_decode($openMeteoJson);
        $this->hourlyTemperature = $openMeteoObject->hourly->temperature_2m;
        $this->hourlyHumidity = $openMeteoObject->hourly->relativehumidity_2m;
        $this->hourlyWeathercode = $openMeteoObject->hourly->weathercode;
        $this->dailyMinTemperature = $openMeteoObject->daily->temperature_2m_min;
        $this->dailyMaxTemperature = $openMeteoObject->daily->temperature_2m_max;
        $this->dailyWeathercode = $openMeteoObject->daily->weathercode;
        $this->dailyWindSpeed = $openMeteoObject->daily->windspeed_10m_max;
        
    }
    function getHourlyTemperature(){
        return $this->hourlyTemperature;
    }
    function getHourlyHumidity(){
        return $this->hourlyHumidity;
    }
    function getHourlyWeathercode(){
        return $this->hourlyWeathercode;
    }
    function getDailyMinTemperature(){
        return $this->dailyMinTemperature;
    }
    function getDailyMaxTemperature(){
        return $this->dailyMaxTemperature;
    }
    function getDailyWeathercode(){
        return $this->dailyWeathercode;
    }
    function getDailyWindSpeed(){
        return $this->dailyWindSpeed;
    }

}
?>