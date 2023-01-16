<?php
class Meteo {
    public $hourlyTemp;
    public $hourlyHumidity;
    public $hourlyWeathercode;
    public $dailyMinTemp;
    public $dailyMaxTemp;
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
        echo $class->getLatitude();
        echo $today;
        echo $lastDay;
        echo"<pre>";
        var_dump($openMeteoObject);
        echo"</pre>";
        $hourlyTemp = $this->openMeteoObject->hourly->temperature_2m;
        $hourlyHumidity = $this->openMeteoObject->data->hourly->relativehumidity_2m;
        $hourlyWeathercode = $this->openMeteoObject->data->hourly->weathercode;
        $dailyMinTemp = $this->openMeteoObject->data->daily->temperature_2m_min;
        $dailyMaxTemp = $this->openMeteoObject->data->daily->temperature_2m_max;
        $dailyWeathercode = $this->openMeteoObject->data->daily->weathercode;
        $dailyWindSpeed = $this->openMeteoObject->data->daily->windspeed_10m_max;
        
    }
    function getHourlyTemp(){
        return $this->hourlyTemp;
    }
    function getHourlyHumidity(){
        return $this->hourlyHumidity;
    }
    function getHourlyWeathercode(){
        return $this->hourlyWeathercode;
    }
    function getDailyMinTemp(){
        return $this->dailyMinTemp;
    }
    function getDailyMaxTemp(){
        return $this->dailyMaxTemp;
    }
    function getDailyWeathercode(){
        return $this->dailyWeathercode;
    }
    function getDailyWindSpeed(){
        return $this->dailyWindSpeed;
    }

}
?>