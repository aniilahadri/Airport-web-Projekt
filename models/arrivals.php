<?php
class Arrivals extends Flights{
    private $id_arrival;
    private $takeoff_time;

    function __construct($flight_id, $time, $origin,$airline,$status,$date,$takeoff_time){
        Flights::__construct($flight_id, $time, $origin,"Kosove",$airline,$status,$date);
        $this->takeoff_time = $takeoff_time;
    }
    function getIdArrival() {
        return $this->id_arrival;
    }
    function getTakeoffTime(){
        return $this->takeoff_time;
    }
}



?>