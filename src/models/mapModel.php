<?php
class Map {
    public function __construct() {        
    }
    //Method to get the json file from the API, decode it, and then organize the data
    function requestAPI(object $class){
        $streetMapJson = file_get_contents("");
        $streetMapObject = json_decode($streetMapJson);        
    }


}
?>