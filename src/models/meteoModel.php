class Meteo {
    constructor(latitude, longitude) {
        this->latitude = latitude;
        this->longitude = longitude;
        const json_data = file_get_contents("https://api.open-meteo.com/v1/dwd-icon?latitude=" + this.latitude + "&longitude=" + this.longitude + "&hourly=temperature_2m,relativehumidity_2m,weathercode&daily=weathercode,temperature_2m_max,temperature_2m_min,windspeed_10m_max&timezone=auto&start_date=2023-01-12&end_date=2023-01-15");
        this->data = json_decode($json_data);
    }
    getTemperature(){
        return this->data->daily->[$i];
    }
}